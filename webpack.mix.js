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

mix.styles([
    'public/vendor/bootstrap/css/bootstrap.css',
    'public/vendor/fontawesome-free/css/all.css',
    'public/css/sb-admin.css',
], 'public/css/admin-all.css')
    .scripts([
        'public/vendor/jquery/jquery.js',
        'public/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'public/vendor/jquery-easing/jquery.easing.min.js',
    ], 'public/js/admin-all.js')
