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

mix
    /* JS */
    .js("resources/js/app.js", "public/js")

    /* CSS */
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])

    .sass(
        "resources/gull/assets/styles/sass/themes/lite-purple.scss",
        "public/assets/styles/css/themes/lite-purple.min.css"
    )
    .sass(
        "resources/gull/assets/styles/sass/themes/lite-blue.scss",
        "public/assets/styles/css/themes/lite-blue.min.css"
    )
    .sass(
        "resources/gull/assets/styles/sass/themes/dark-purple.scss",
        "public/assets/styles/css/themes/dark-purple.min.css"
    )

/* Laravel JS */
mix
    .combine(
    [
        "resources/gull/assets/js/vendor/jquery-3.3.1.min.js",
        "resources/gull/assets/js/vendor/bootstrap.bundle.min.js",
        "resources/gull/assets/js/vendor/perfect-scrollbar.min.js",
    ],
    "public/assets/js/common-bundle-script.js"
);

mix.js(["resources/gull/assets/js/script.js"], "public/assets/js/script.js");
