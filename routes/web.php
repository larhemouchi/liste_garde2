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

Route::get('/test', function () {
    return view('test');
});

Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'DashController@home')->name('dash.home');

Route::middleware(['auth'])->group(function () {


/*

Route::get('/posts/{post}', 'PostsController@show')
        ->name('post.update')
    ->middleware('can:update,post');
*/


    Route::get('/roles', 'RolyController@index')->name('roles.index');
    Route::get('/roles/create', 'RolyController@create')->name('roles.create');
    Route::post('/roles', 'RolyController@store')->name('roles.store');
    Route::get('/roles/{id}', 'RolyController@show')->name('roles.show');
    Route::get('/roles/{id}/edit', 'RolyController@edit')->name('roles.edit');
    Route::put('/roles/{id}', 'RolyController@update')->name('roles.update');
    Route::delete('/roles/{id}', 'RolyController@destroy')->name('roles.destroy');

    Route::get('/users', 'UserController@index')->name('users.index');
    Route::get('/users/{id}', 'UserController@show')->name('users.show');
    Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::put('/users/{id}', 'UserController@update')->name('users.update');
    Route::delete('/users-destroy/{id}', 'UserController@destroy')->name('users.destroy');



    Route::get('/spec', 'SpecController@index')->name('spec.index');
    Route::get('/spec/create', 'SpecController@create')->name('spec.create');
    Route::post('/spec', 'SpecController@store')->name('spec.store');
    Route::get('/spec/{id}', 'SpecController@show')->name('spec.show');
    Route::get('/spec/{id}/edit', 'SpecController@edit')->name('spec.edit');
    Route::put('/spec/{id}', 'SpecController@update')->name('spec.update');
    Route::delete('/spec/{id}', 'SpecController@destroy')->name('spec.destroy');




    Route::get('/servicies', 'ServicyController@index')->name('servicies.index');
    Route::get('/servicies/create', 'ServicyController@create')->name('servicies.create');
    Route::post('/servicies', 'ServicyController@store')->name('servicies.store');
    Route::get('/servicies/{id}', 'ServicyController@show')->name('servicies.show');
    Route::get('/servicies/{id}/edit', 'ServicyController@edit')->name('servicies.edit');
    Route::put('/servicies/{id}', 'ServicyController@update')->name('servicies.update');
    Route::delete('/servicies/{id}', 'ServicyController@destroy')->name('servicies.destroy');



    Route::get('/guardy-c/{guardy}', 'GuardyController@comments')->name('guardies.comments');
    Route::get('/guardies-h/{plage}', 'GuardyController@history')->name('guardies.history');


    Route::get('/guardies', 'GuardyController@index')->name('guardies.index');
    Route::get('/guardies/create', 'GuardyController@create')->name('guardies.create');
    Route::post('/guardies', 'GuardyController@store')->name('guardies.store');
    Route::get('/guardies/{id}', 'GuardyController@show')->name('guardies.show');
    Route::get('/guardies/{id}/edit', 'GuardyController@edit')->name('guardies.edit');
    Route::put('/guardies/{id}', 'GuardyController@update')->name('guardies.update');
    Route::delete('/guardies/{id}', 'GuardyController@destroy')->name('guardies.destroy');



    Route::get('/all-histories', 'HistoryController@index')->name('histories.index');
    Route::get('/plages-h/{plage}', 'PlageController@history')->name('plages.history');

    Route::get('/plages', 'PlageController@index')->name('plages.index');
    Route::get('/plages/create', 'PlageController@create')->name('plages.create');
    Route::post('/plages', 'PlageController@store')->name('plages.store');
    Route::get('/plages/{id}', 'PlageController@show')->name('plages.show');
    Route::get('/plages/{id}/edit', 'PlageController@edit')->name('plages.edit');
    Route::put('/plages/{id}', 'PlageController@update')->name('plages.update');
    Route::delete('/plages/{id}', 'PlageController@destroy')->name('plages.destroy');




    Route::get('/comment', 'CommentController@index')->name('comment.index');
    Route::get('/comment/create', 'CommentController@create')->name('comment.create');
    Route::post('/comment', 'CommentController@store')->name('comment.store');
    Route::get('/comment/{id}', 'CommentController@show')->name('comment.show');
    Route::get('/comment/{id}/edit', 'CommentController@edit')->name('comment.edit');
    Route::put('/comment/{id}', 'CommentController@update')->name('comment.update');
    Route::delete('/comment/{id}', 'CommentController@destroy')->name('comment.destroy');




    Route::get('/calendar/{guardy}/guardy', 'GuardyController@calendar')->name('guardies.calendar');


});







Route::get('/calendar', 'GuardyController@generalCalendar')->name('guardies.g-calendar');

