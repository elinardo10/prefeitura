const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir(function(mix) {
     mix.scripts([
    	'/../../../node_modules/jquery/dist/jquery.js',
    	'/../../../node_modules/bootstrap/dist/js/bootstrap.js',
    	 'app.js'
    	], 'public/js/app.js');

     mix.styles([
    	'/../../../node_modules/font-awesome/css/font-awesome.css',
    	'/../../../node_modules/bootstrap/dist/css/bootstrap.min.css',
    	'/../../../node_modules/site-assets/css/demo.css',
    	'/../../../node_modules/site-assets/css/theme.min.css',
    	'/../../../node_modules/site-assets/css/yamm.css',
    	'app.css'
    	], 'public/css/app.css');
     mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
});