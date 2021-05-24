var elixir = require('laravel-elixir');
elixir.config.sourcemaps = false;

var gulp = require('gulp');



elixir(function(mix) {
// compile sass file to css
mix.sass('resources/assets/sass/app.scss', 'resources/assets/css');

// combine all css files to one css file

mix.styles(
    [

 // destination where gulp should look for the cssfiles to combine

 'css/app.css',
 'bower/vendor/slick-carousel/slick/slick.css'
    ],
   // destination where gulp should put the combined css file
   'public/css/all.css',

   //  folder path for gulp to look for the files to combine
   'resources/assets'
	);

var bowerpath = 'bower/vendor';

mix.scripts (
	[
   // compile all jquery files to one files
  bowerpath + '/jquery/dist/jquery.min.js',

  // combile all foundation-sites js files to one file
  bowerpath + '/foundation-sites/dist/js/foundation.min.js',

  // compile all slick-carousel js files to one file 
  bowerpath + '/slick-carousel/slick/slick.min.js'
],
 //destinatin where gulp should put the combined js file
 'public/js/all.js',

 //folder path for a gulp to look for a js file to combine
 'resources/assets'
	);
});