const mix = require('laravel-mix');
let CaseSensitivePathsPlugin = require('case-sensitive-paths-webpack-plugin');
let VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin')

let webpackConfig = {
    plugins: [
        new CaseSensitivePathsPlugin(),
        new VuetifyLoaderPlugin()
        // other plugins ...
    ]
    // other webpack config ...
}
mix.webpackConfig(webpackConfig)

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
