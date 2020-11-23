<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('Auth')->group(function () {
	 Route::get('register', 'RegisterController@showRegistrationForm')->name('register.show');
    Route::post('register', 'RegisterController@register')->name('register');

    //Login Routes
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
     Route::get('email/verify/{token}', 'VerificationController@verify');
	});
