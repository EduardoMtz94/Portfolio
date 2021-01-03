<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Lalo Codes | Web Developer | Desarrollador Web') }}</title>

        <meta name="description" content="{{ $metaTagsSeo->description }}">
        <meta name="robots" content="{{ $metaTagsSeo->robots }}">
        <meta name="keywords" content=" {{ $metaTagsSeo->keywords }}">

        <meta property="og:type" content="{{ $metaTagsSeo->ogType }}" />
        <meta property="og:title" content="{{ $metaTagsSeo->ogTitle }}" />
        <meta property="og:description" content="{{ $metaTagsSeo->ogDescription }}" />
        <meta property="og:image" content="{{ $metaTagsSeo->ogImage }}" />
        <meta property="og:url" content="{{ $metaTagsSeo->ogUrl }}" />
        <meta name="twitter:widgets:theme" content="dark">
        <link rel="me" href="https://twitter.com/AlemanEMS">

        <meta property="twitter:card" content="{{ $metaTagsSeo->twitter_card }}" />
        <meta property="twitter:creator" content="{{ $metaTagsSeo->twitter_creator }}" />
        <meta property="twitter:description" content="{{ $metaTagsSeo->twitter_description }}" />
        <meta property="twitter:image" content="{{ $metaTagsSeo->twitter_image }}" />
        <meta property="twitter:site" content="{{ $metaTagsSeo->twitter_site }}" />
        <meta property="twitter:title" content="{{ $metaTagsSeo->twitter_title }}" />
      
        <link rel="canonical" href="{{ $metaTagsSeo->canonical }}">

        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        {{ $slot }}
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script async defer src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </body>
</html>