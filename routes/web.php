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
Route::get('/teacher', 'HomeController@tech');
Route::get('/student', 'HomeController@stu');
Route::post('/techsaq', 'HomeController@tsaq');
Route::post('/stusaq', 'HomeController@stusaq');
Route::get('/tdel/{id}','HomeController@tdel');
Route::get('/studel/{id}','HomeController@sdel');
Route::get('/tedit/{id}', 'HomeController@ted');
Route::get('/video', 'HomeController@vid');
Route::post('/editsaq/{id}', 'HomeController@edsaq');
Route::get('/sedit/{id}', 'HomeController@sedit');
Route::post('/seedit/{id}', 'HomeController@sedsaq');