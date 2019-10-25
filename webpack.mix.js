const mix = require('laravel-mix');

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



mix
// ビルドしたsassをそれぞれ開発側buildディレクトリへ出力
   // .sass('resources/assets/sass/test1.scss', '../resources/assets/build/css/')
   // .sass('resources/assets/sass/test2.scss', '../resources/assets/build/css/')
// buildディレクトリに出力したcssファイルを、app.cssというファイルに１つにまとめてpublicディレクトリへ出力する
   // .styles(
   // [
	    //'resources/assets/build/css/test1.css',
	    //'resources/assets/build/css/test2.css'
	//],
        //'public/css/app.css'
    .sass('resources/sass/style.scss', 'public/css/style.css')
// app.jsというファイルに１つにまとめてpublicディレクトリへ出力する
    .js(
	'resources/js/app.js',
	'public/js/app.js'
    );
