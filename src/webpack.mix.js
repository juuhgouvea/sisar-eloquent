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

mix.js('resources/js/cursos/index.js', 'public/js/cursos');
mix.js('resources/js/professores/index.js', 'public/js/professores');
mix.js('resources/js/disciplinas/index.js', 'public/js/disciplinas');

mix.copyDirectory('resources/images', 'public/images');
