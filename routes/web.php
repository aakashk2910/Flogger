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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/fileentries', 'Admin\\fileentriesController');

Route::post('/uploaddoc', 'HomeController@uploaddoc');
Route::post('/uploadimg', 'HomeController@uploadimg');
Route::post('/uploadmedia', 'HomeController@uploadmedia');

Route::post('/uploadsdoc', 'HomeController@uploadsdoc');
Route::post('/uploadsimg', 'HomeController@uploadsimg');
Route::post('/uploadsmedia', 'HomeController@uploadsmedia');

Route::get('/test', 'HomeController@test');

Route::get('/download/{name}', 'HomeController@download');