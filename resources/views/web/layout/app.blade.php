<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('web.home.fragments.drift')
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Koin better</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->   
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/icon.png">
    <!-- Google font (font-family: 'Source Sans Pro', sans-serif; font-family: 'Oswald', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,600i,700" rel="stylesheet">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('data/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('data/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('data/style.css')}}">
    <!-- Cusom css -->
    <link rel="stylesheet" href="{{asset('data/css/custom.css')}}">

    <!-- Modernizer js -->
    <script src="{{asset('data/js/vendor/modernizr-3.5.0.min.js')}}"></script>
</head>


<body>
        <!-- this is the header section that contains the logo and the navigation bars   -->
        @include('web.layout.includes.header')
        <!-- end of the header section -->

        <!-- this is the beginning of the landpage section ie first-site of the website  -->
        @yield('content')

        @include('web.layout.includes.banner')
        <!-- footer section -->
        @include('web.layout.includes.footer')
        @include('web.layout.includes.scripts')
</body>
