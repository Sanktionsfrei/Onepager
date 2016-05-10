<!doctype html>
<html class="no-js" lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sanktionsfrei</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="/css/dashboard.css">
</head>
<body>
<div class="wrapper">
    <section role="navigation">
        @include('dashboard._partials.nav')
    </section>
    <section class="content" role="presentation">
        <div class="container-fluid">
            <div class="col-sm-2 hidden-xs-down">
                <ul class="nav nav-pills nav-stacked">
                    @yield('sidebar')
                </ul>
            </div>
            <div class="col-xs-12 col-sm-10">
                @yield('content')
            </div>
        </div>
    </section>
    <footer role="contentinfo">

    </footer>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
<script src="/js/plugins.js"></script>
<script src="/js/main.js"></script>
</body>
</html>