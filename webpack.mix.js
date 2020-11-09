const mix = require('laravel-mix');
const path = require("path");

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

mix.webpackConfig({
    resolve: {
        alias: {
            src: path.join(__dirname, "resources/js/"),
            node_modules: path.join(__dirname, "node_modules"),
        },
    },
});

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
    'resources/theme/plugins/select2/css/select2.min.css',
    'resources/theme/css/style.css',
], 'public/css/theme.css');

mix.js([
    'resources/theme/js/jquery.min.js',
    'resources/theme/js/popper.min.js',
    'resources/theme/js/bootstrap.min.js',
    'resources/theme/plugins/select2/js/select2.min.js',
], 'public/js/theme.js');

 /*
 | End of the theme assets compilation
 */

mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/sass/app.scss', 'public/css');
