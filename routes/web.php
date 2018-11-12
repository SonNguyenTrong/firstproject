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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
	Route::resource('tickets', 'TicketController');
	Route::get('/edit/ticket/{id}', 'TicketController@editTicket')->name('editTicket');
	Route::post('/edit/ticket/{id}', 'TicketController@updateTicket')->name('updateTicket');
	Route::get('/show/ticket/{id}', 'TicketController@showTicket')->name('showTicket');
	Route::post('/show/ticket','CommentsController@newComment')->name('newComment');
});


