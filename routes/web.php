<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', 'HomeController@home')->name('home');
Route::get('/contact', 'ContactController@show')->middleware('auth')->name('contact');
Route::post('store', 'ContactController@store')->name('contactEmail');


Route::resource('payment', 'PaymentController')->middleware('auth');


Route::get('notifications', 'UserNotificationsController@show')->middleware('auth')->name('notifications');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
