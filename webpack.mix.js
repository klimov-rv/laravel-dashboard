/*
* Require laravel mix for ease of working with webpack.
*/
let mix = require('laravel-mix');

mix.options({ 
    PurgeCss: true,
    //purifyCss: {},
    postCss: [require('autoprefixer')], 
});

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/tailwind.css', 'public/css', [
        //
    ])
    .postCss('resources/css/fonts.css', 'public/css')
    .postCss('resources/css/my.css', 'public/css')

if (mix.inProduction()) {
    mix.version();
}