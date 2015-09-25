var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix
        .copy('vendor/bower_components/bootstrap/dist/fonts/', 'public/build/dist/fonts/')
        .sass([
            'normalize.scss', 'app.scss'
        ], 'public/dist/css/all.css', './')
        .scripts([
            'vendor/bower_components/jquery/dist/jquery.js',
            'vendor/bower_components/bootstrap/dist/js/bootstrap.js',
            'resources/assets/js/app.js'
        ], 'public/dist/js/all.js', './')
        .version(['public/dist/css/all.css', 'public/dist/js/all.js']);
});
