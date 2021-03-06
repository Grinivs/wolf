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
		$posts = App\Post::orderBy('id', 'desc')->take(3)->get();
    return view('countdown.index', compact('posts'));
});

Route::get('home', function () {
	$posts = App\Post::orderBy('id', 'desc')->take(3)->get();
    return view('welcome', compact('posts'));
});
Route::get('chart', function () {
	$posts = App\Post::orderBy('id', 'desc')->take(3)->get();
    return view('chart', compact('posts'));
});
Route::get('shop', function () {
	$posts = App\Post::orderBy('id', 'desc')->take(3)->get();
    return view('shop', compact('posts'));
});
Route::get('contact', function () {
	$posts = App\Post::orderBy('id', 'desc')->take(3)->get();
    return view('contact', compact('posts'));
});
Route::get('countdown', function () {
	$posts = App\Post::orderBy('id', 'desc')->take(3)->get();
    return view('countdown.index', compact('posts'));
});


Route::get('post/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});


Route::get('config', function () {
    return view('config.php');
});


Route::get('post', function () {
	return view('post');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['middleware' => 'guest'], function() {
  Route::get('signin', [
    'uses' => 'UserController@getSignin',
    'as' => 'signin'
  ]);

  Route::post('signin', [
    'uses' => 'UserController@postSignin',
    'as' => 'signin'
  ]);
});


 Route::get('profile', function () {
	 $posts = App\Post::orderBy('id', 'desc')->take(3)->get();
	return view('profile');
});
 Route::get('profile', [
  'uses' => 'UserController@getProfile',
  'as' => 'profile',
  'middleware' => 'auth'
]);

Route::get('logout', [
  'uses' => 'UserController@getLogout',
  'as' => 'logout',
  'middleware' => 'auth'
]);

Route::post('logout', [
  'uses' => 'UserController@getLogout',
  'as' => 'logout',
  'middleware' => 'auth'
]);
