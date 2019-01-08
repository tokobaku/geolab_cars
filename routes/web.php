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
    return view('welcome', [
    	'services' => App\Service::all(),
    	'slides' => App\Slide::all()
    ]);
});

Auth::routes();

Route::post('/subscriber', 'SubscriberController@store');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	Route::get('/', 'AdminController@index')->name('admin');
	Route::resource('/services', 'ServiceController');
	Route::resource('/slides', 'SlideController');
	Route::get('/links', 'SocialLinkController@index');
	Route::get('/links/{id}', 'SocialLinkController@edit');
	Route::patch('/links/{id}', 'SocialLinkController@update');
	Route::get('/subscribers', 'SubscriberController@index');
});