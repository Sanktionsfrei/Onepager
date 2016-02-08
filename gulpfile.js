var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    //mix.sass('app.scss');

    mix.scripts([
        'vendor/jquery-1.11.3.min.js',
        'vendor/bootstrap.min.js',
        'vendor/matchMedia.js',
        'vendor/nivo-lightbox.min.js',
        'vendor/owl.carousel.min.js',
        'vendor/smoothscroll.js',
        'vendor/simple-expand.min.js',
        //'vendor/retina.min.js',
        'vendor/wow.min.js',
    ], 'public/js/vendor/libs.js')
        .scripts([
            'plugins/jquery.ajaxchimp.min.js',
            'plugins/jquery.fitvids.js',
            'plugins/jquery.localScroll.min.js',
            'plugins/jquery.nav.js',
            'plugins/jquery.scrollTo.min.js',
            'plugins/jquery.stellar.min.js',
        ], 'public/js/vendor/plugins.js')
        .scripts(['plugins.js', 'theme.js', 'main.js'], 'public/js/main.js');

    mix.styles([
        'bootstrap.min.css',
        'owl.theme.css',
        'owl.carousel.css',
        'nivo-lightbox.css',
        'default.css',
        'animate.min.css',
        'styles.css',
        'sanktionsfrei.css',
        'responsive.css',
        'app-icons.css',
        'elegant-icons.css'
    ], 'public/css/app.css');


    mix.version(['css/app.css', 'js/vendor/libs.js','js/vendor/plugins.js','js/main.js']);
});