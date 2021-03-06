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

mix.combine(['resources/js/*'], 'public/js/script.js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
        .combine(['resources/css/*'], 'public/css/style.css');

