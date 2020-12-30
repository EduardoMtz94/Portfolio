<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{

    public function index()
    {
        $metaTagsSeo = [];
        $metaTagsSeo['canonical'] = URL::current();
        $metaTagsSeo['description'] = 'Lalo Codes - Hola soy Eduardo Martínez, un apasionado desarrollador web. Me especializo en desarrollar landing pages, paginas en wordpress y software a la medida.';
        $metaTagsSeo['keywords'] = 'desarrollador web,landing page,paginas en wordpress,software a la medida,software,wordpress,desarrollador de paginas web,web developer,freelance web developer,web developer near me';
        // Metatags Open Graph (Google y Facebook)
        $metaTagsSeo['ogType'] = 'website';
        $metaTagsSeo['ogTitle'] = env('APP_NAME', 'Lalo Codes | Web Developer | Desarrollador Web');
        $metaTagsSeo['ogDescription'] = $metaTagsSeo['description'];
        $metaTagsSeo['ogImage'] = URL::asset('/img/me.jpeg');
        $metaTagsSeo['ogUrl'] = $metaTagsSeo['canonical'];
        // Metatags Twitter
        $metaTagsSeo['twitter_card']           = 'summary';
        $metaTagsSeo['twitter_creator']        = '@AlemanEMS';
        $metaTagsSeo['twitter_description']    = $metaTagsSeo['description'];
        $metaTagsSeo['twitter_image']          = $metaTagsSeo['ogImage'];
        $metaTagsSeo['twitter_site']           = '@AlemanEMS';
        $metaTagsSeo['twitter_title']          = env('APP_NAME', 'Lalo Codes | Web Developer | Desarrollador Web');

        return view('main.index')
            ->with('metaTagsSeo', (object) $metaTagsSeo);
    }

    public function store(Request $request)
    {
        //
    }
}
