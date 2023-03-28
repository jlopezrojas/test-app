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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const browserSync = require('browser-sync');


mix.browserSync({
    proxy: 'http://test-app.test/',
    files: ['public/**/*.css', 'public/**/*.js', 'resources/views/**/*.php'],
    open: false,
    reloadOnRestart: true,
});