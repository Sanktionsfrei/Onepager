<!doctype html>
<html class="no-js" lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sanktionsfrei</title>
    <meta name="description" content="Die deutschen Jobcenter dürfen ihre Hilfen unter das Existenzminimum kürzen. Das ist nicht okay. Wir machen deshalb Hartz IV sanktionsfrei.">
    <meta name="keywords" content="Sanktionsfrei, Hartz IV, Sanktionen, Hartz 4, ALG II, Arbeitslosengeld 2">
    <meta name="author" content="Sanktionsfrei">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Sanktionsfrei">
    <meta itemprop="description" content="Teile dein Erlebnis im Joncenter.">
    <meta itemprop="image" content="{{ url('images/bg-1.jpg') }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@sanktionsfrei">
    <meta name="twitter:title" content="Sanktionsfrei">
    <meta name="twitter:description" content="Teile dein Erlebnis im Joncenter.">
    <meta name="twitter:creator" content="@sanktionsfrei">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="{{ url('images/bg-1.jpg') }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="Sanktionsfrei" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:image" content="{{ url('images/bg-1.jpg') }}" />
    <meta property="og:description" content="Teile dein Erlebnis im Joncenter.">
    <meta property="og:site_name" content="Sanktionsfrei" />
    <meta property="fb:app_id" content="1297764360250524" />

    <link rel="icon" href="{{url('/images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('images/apple-touch-icon-114x114.png') }}">

    <!--[if lt IE 9]>
    <script src="{{ url('js/html5shiv.js')}}"></script>
    <script src="{{ url('js/respond.min.js') }}"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <script src="{{ url('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="preloader">
    <div class="status">&nbsp;</div>
</div>
@include('components.header')

@yield('content')

@include('components.footer-small')
@include('components.modals')

<script src="{{ elixir('js/vendor/libs.js') }}"></script>
<script src="{{ elixir('js/vendor/plugins.js') }}"></script>
<script src="{{ elixir('js/main.js') }}"></script>

<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-68487422-1','auto');ga('send','pageview');
</script>
</body>
</html>