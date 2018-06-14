let mix = require('laravel-mix');

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
     node: {
       fs: "empty"
     },
     output: {
         publicPath: '/',
         chunkFilename: 'js/chunks/[name].js',
     },
     module: {
     loaders: [
       {
           test: /\.jsx$/,
           loader: 'babel'
       },
       {
           test: /\.js$/,
           loader: 'babel',
           exclude: /node_modules/
       },
       {
           test: /\.ejs$/,
           loader: 'ejs-loader',
       },
      ],
     }
 });

if (!mix.inProduction()) {
    mix.browserSync({
        open: 'external',
        host: 'b2systems.test',
        proxy: 'b2systems.test',
        browser: "google chrome",
        files: [
            'resources/views/**/*.php',
            'public/js/**/*.js',
            'public/css/**/*.css'
        ]
    });
}

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .extract(['vue', 'element-ui', 'axios'])
   .version();

mix.webpackConfig({
   devtool: 'source-map'
})
.sourceMaps();
