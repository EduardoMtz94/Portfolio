<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use App\Traits\FacebookTrait;
use App\Traits\LocationTrait;
use App\Traits\MetaTagsTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    use MetaTagsTrait, FacebookTrait, LocationTrait;

    public function index()
    {
        $metaTagsSeo = $this->getMetaTags();
        $timeline = $this->getTimeline();
        $this->setLocation();

        return view('main.index')
            ->with('metaTagsSeo', (object) $metaTagsSeo)
            ->with('timeline',$timeline);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $name = $data['name'];
        $email = $data['email'];
        $bodyMessage = $data['bodyMessage'];

        Mail::to('eduardomartinezsan94@gmail.com')->send(new ContactMe($name, $email, $bodyMessage));

        toastr()->success('Gracias por ponerte en contacto conmigo, te responderé lo más pronto posible!', 'Email enviado');
        return redirect('/');
    }
}