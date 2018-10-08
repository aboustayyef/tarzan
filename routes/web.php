<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/cache-clear', function(){
	\Cache::forget('postDetails');
	return redirect('/');
});

Route::get('latestPost', function(){
	$latestpost = json_decode(file_get_contents('https://news.tarzan.com.gh/wp-json/wp/v2/posts'));
	return $latestpost;
});

Route::get('/special/tarzan-access-blue-gallery', function(){
	return view('specials.tarzan-bg-access-2018');
});

Route::get('/{a?}/{b?}', [
	'as'		=>		'pages',
	'uses'		=>		'pagesController@index'
]);

Route::post('/learn/contact', [
	'uses'		=>	'pagesController@postEmail'
]);