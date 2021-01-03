<?php

namespace App\Http\Controllers;

use App\Traits\FacebookTrait;
use App\Traits\LocationTrait;
use App\Traits\MetaTagsTrait;
use Illuminate\Http\Request;

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
        //
    }
}
