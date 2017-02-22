const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js/vendor')
   .js('node_modules/jquery/src/jquery.js', 'public/js/vendor')
   .sass('resources/assets/sass/app.scss', 'public/css/vendor')
   .sass('node_modules/bulma/bulma.sass', 'public/css/vendor')
   .sass('node_modules/font-awesome/scss/font-awesome.scss', 'public/css/vendor');

mix.combine([
	'public/css/vendor/font-awesome.css',
	'public/css/vendor/bulma.css',
	'public/css/vendor/app.css',
], 'public/css/app.css');
