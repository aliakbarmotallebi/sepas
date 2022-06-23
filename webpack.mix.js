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

mix.js("resources/js/app.js", "public/javascripts")
    .postCss("resources/css/dashboard/styles.css", "public/styles/dashboard/", [
        require("tailwindcss"),
    ])
    .postCss("resources/css/security/styles.css", "public/styles/security/", [
        require("tailwindcss"),
    ])
    .copyDirectory('resources/fonts', 'public/fonts')