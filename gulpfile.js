var elixir = require('laravel-elixir');

// npm install --save-dev browser-sync

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

elixir(function (mix) {
    mix.scripts([

        ])

        .browserSync({ proxy: 'laravel.dev', open: false });

});
