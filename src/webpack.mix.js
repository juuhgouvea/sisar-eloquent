const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.css('resources/css/main.css', 'public/css');
mix.css('resources/css/pagina-home.css', 'public/css');
mix.css('resources/css/pagina-matriculas.css', 'public/css');

mix.copyDirectory('resources/images', 'public/images');
