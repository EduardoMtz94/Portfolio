<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>lalocodes</title>

        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        {{ $slot }}
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>