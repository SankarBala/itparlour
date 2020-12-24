const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/admin/admin.js', 'public/js')
    .js('resources/js/frontend/frontend.js', 'public/js')
    .js('resources/js/ckeditor.js', 'public/js')
    .sass('resources/sass/admin/admin.scss', 'public/css')
    .sass('resources/sass/frontend/frontend.scss', 'public/css')
    .sourceMaps();

mix.copy('resources/js/multiselect.min.js', 'public/js')
    .copy('resources/sass/multiselect.css', 'public/css');

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

