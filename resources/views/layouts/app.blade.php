<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- IE -->
    <link rel="shortcut icon" type="image/png" href="/images/favicon.png" />
    <!-- other browsers -->
    <link rel="icon" type="image/png" href="/images/favicon.png" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Facebook Tags -->
    <meta property="og:url"                content="" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="" />
    <meta property="og:description"        content="" />
    <meta property="og:image"              content="" />
    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Styles -->
    
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app"></div>
    
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>

</body>
</html>
