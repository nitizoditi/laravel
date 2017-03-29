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






Route::group(['middleware' => ['web']], function () {
	Route::get('/', 'UserController@index')->name('login');
    Route::post('/signup', 'UserController@postSignUp')->name('signup');
    Route::post('/signin', 'UserController@postSignIn')->name('signin');
    Route::get('/dashboard',['uses'=>'UserController@getDashboard','as'=>'dashboard','middleware'=>'auth']);
    Route::get('/verify', 'UserController@getVerify')->name('verify');
    Route::post('/activate', 'UserController@postVerify')->name('activate');
    Route::post('/forgot', 'UserController@postForgot')->name('forgot');
    Route::get('/payment', 'UserController@getPayment')->name('payment');
    Route::get('/logout', 'UserController@getLogout')->name('logout');
    Route::get('/profile',['uses'=>'UserController@getProfile','as'=>'profile','middleware'=>'auth']);
    Route::post('/profile_edit',['uses'=>'UserController@postProfile','as'=>'profile_edit','middleware'=>'auth']);

});


   

