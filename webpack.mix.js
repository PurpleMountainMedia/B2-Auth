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

 const appPath = path.resolve(__dirname, 'resources', 'assets', 'js');

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
    },
    resolve: {
        alias: {
            // 'vue$': 'vue/dist/vue.runtime.esm.js',
            'axios': 'axios/dist/axios.min.js',
            'components': path.resolve(appPath, 'components'),
            'lang': path.resolve(appPath, 'lang'),
            'utils': path.resolve(appPath, 'utils'),
        }
    }
 });

if (!mix.inProduction()) {
    mix.browserSync({
        open: 'external',
        host: 'b2systems.test',
        proxy: 'http://b2systems.test',
        browser: "google chrome",
        files: [
            'resources/views/**/*.php',
            'public/js/**/*.js',
            'public/css/**/*.css'
        ]
    });
}

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/particles.js', 'public/js')
   .js('resources/assets/js/particles-config.js', 'public/js')
   .js('resources/assets/js/web.js', 'public/js')
   .copy('resources/assets/js/particles.json', 'public')
   .sass('resources/assets/sass/site.scss', 'public/css')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .extract(['vue', 'element-ui', 'axios'])
   .version();

mix.webpackConfig({
   devtool: 'source-map'
})
.sourceMaps();
