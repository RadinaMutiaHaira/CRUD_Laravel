const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
<<<<<<< HEAD
 | for your Laravel application. By default, we are compiling the Sass
=======
 | for your Laravel applications. By default, we are compiling the CSS
>>>>>>> b0ad48fb166cceac24b5e2975f61ee26ca08325b
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
<<<<<<< HEAD
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
=======
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
>>>>>>> b0ad48fb166cceac24b5e2975f61ee26ca08325b
