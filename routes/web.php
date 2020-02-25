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
    return view('/index');
})->name('index');

Route::get('/activity/index', 'ActivityController@index')->name("activity.index");
Route::get('/activity/create', 'ActivityController@create')->name("activity.create");
Route::post('/activity/save', 'ActivityController@save')->name("activity.save");
Route::get('/activity/show/{id}', 'ActivityController@show')->name("activity.show");
Route::post('/activity/delete/{id}', 'ActivityController@delete')->name("activity.delete");