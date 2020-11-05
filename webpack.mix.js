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

 /*
 |--------------------------------------------------------------------------
 | ThemeForest Mentoring E-Learning Theme Section
 |--------------------------------------------------------------------------
 | Note: Admin assets are not included.
 */
mix.styles([
    'resources/theme/css/bootstrap.min.css',
    'resources/theme/plugins/fontawesome/css/fontawesome.min.css',
    'resources/theme/plugins/fontawesome/css/all.min.css',
    'resources/theme/plugins/daterangepicker/daterangepicker.css',
    'resources/theme/css/bootstrap-datetimepicker.min.css',
    'resources/theme/plugins/select2/css/select2.min.css',
    'resources/theme/css/owl.carousel.min.css',
    'resources/theme/css/owl.theme.default.min.css',
    'resources/theme/css/style.css',
], 'public/css/theme.css');

mix.js('resources/theme/js/', 'public/theme/js');
mix.copyDirectory('resources/theme/img/', 'public/img');
mix.copyDirectory('resources/theme/plugins/', 'public/theme/plugins');
mix.copyDirectory('resources/theme/plugins/fontawesome/webfonts', 'public/webfonts');

mix.js('resources/theme/js/script.js', 'public/js/theme.js').sourceMaps(false);
 /*
 | End of the theme assets compilation
 */

mix.sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/app.js', 'public/js').sourceMaps(false);
