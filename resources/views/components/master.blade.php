<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Lalo Codes | Web Developer | Desarrollador Web') }}</title>
        <link rel="icon" type="image/png" href="{{ asset('img/lalo-codes-favicon.png') }}"/>

        <meta name="description" content="{{ $metaTagsSeo->description }}">
        <meta name="robots" content="{{ $metaTagsSeo->robots }}">
        <meta name="keywords" content=" {{ $metaTagsSeo->keywords }}">

        <meta property="og:type" content="{{ $metaTagsSeo->ogType }}" />
        <meta property="og:title" content="{{ $metaTagsSeo->ogTitle }}" />
        <meta property="og:description" content="{{ $metaTagsSeo->ogDescription }}" />
        <meta property="og:image" content="{{ $metaTagsSeo->ogImage }}" />
        <meta property="og:url" content="{{ $metaTagsSeo->ogUrl }}" />

        <meta property="twitter:card" content="{{ $metaTagsSeo->twitter_card }}" />
        <meta property="twitter:creator" content="{{ $metaTagsSeo->twitter_creator }}" />
        <meta property="twitter:description" content="{{ $metaTagsSeo->twitter_description }}" />
        <meta property="twitter:image" content="{{ $metaTagsSeo->twitter_image }}" />
        <meta property="twitter:site" content="{{ $metaTagsSeo->twitter_site }}" />
        <meta property="twitter:title" content="{{ $metaTagsSeo->twitter_title }}" />
        <meta name="twitter:widgets:theme" content="dark">
        <link rel="me" href="https://twitter.com/AlemanEMS">
      
        <link rel="canonical" href="{{ $metaTagsSeo->canonical }}">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GTAG') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', "{{ env('GTAG') }}");
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5KXDC53');</script>
        <!-- End Google Tag Manager -->

        <!-- Hotjar Tracking Code for https://lalocodes.com/ -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:2480751,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>

        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KXDC53"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        {{ $slot }}
        
        <script src="{{ asset('js/app.js') }}"></script>
        <script async defer src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </body>
</html>