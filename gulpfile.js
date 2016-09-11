/*
1. npm install
2. gulp
from : 	resources/assets/css|js/
to : 	public/css|js/
*/
const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir.config.sourcemaps = false;

elixir(mix => {
    // mix.copy('./resources/js/vue','public/js/vue');
	mix.copy('./resources/views/trip/templates/green/css','public/css');
	mix.copy('./resources/views/trip/templates/green/fonts','public/fonts');
	mix.copy('./resources/views/trip/templates/green/images','public/images');
	mix.copy('./resources/views/trip/templates/green/js','public/js');
	mix.copy('./resources/views/trip/templates/green/sass','public/sass');

	//mix.copy('./resources/js/react','public/js/react');
	//mix.browserify('./resources/js/bundle.js');
    //mix.scriptsIn('./resources/js/react/')
    /*
    sass('app.scss')
    	.rollup('test.js','./public/dist')
    	.version('css/app.css')
    	.browserSync({
        	proxy: 'localhost',
        	port:'8000'
    })
    	*/
   
       //.webpack('app.js');
});
