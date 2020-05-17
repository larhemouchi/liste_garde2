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
    return redirect()->route('login');
});

Route::get('/test', function () {
    return view('test');
});

Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'DashController@home')->name('dash.home');


Route::resource('roles', 'RolyController');
Route::resource('users', 'UserController');
Route::resource('spec', 'SpecController');
Route::resource('servicies', 'ServicyController');
Route::resource('guardies', 'GuardyController');



Route::get('/all-histories', 'HistoryController@index')->name('histories.index');
Route::get('/plages-h/{plage}', 'PlageController@history')->name('plages.history');
Route::resource('plages', 'PlageController');

Route::get('/calendar/{guardy}', 'GuardyController@calendar')->name('guardies.calendar');



