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
Route::resource('kejuruan','KejuruanController');
Route::resource('subkejuruan','SubKejuruanController');
Route::resource('program','ProgramController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('carik','KejuruanController@search');
Route::get('caris','SubKejuruanController@search');
Route::get('carip','ProgramController@search');