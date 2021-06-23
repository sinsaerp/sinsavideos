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



Route::group(['middleware' => ['guest']], function () {

    Route::get('/','Auth\LoginController@showLoginForm')->name('view.login');
    Route::get('/login','Auth\LoginController@showLoginForm')->name('login');    
    Route::post('/login', 'Auth\LoginController@login')->name('login');


});


Route::group(['middleware' => ['auth']], function () {
Route::get('subir','ViewController@videos')->name('subir')->middleware('admin');
Route::get('videos','ViewController@pageVideos')->name('videos');
Route::get('home','ViewController@home')->name('home');
Route::get('historial','ViewController@historial')->name('historial');
Route::get('usuarios','ViewController@usuarios')->name('usuarios')->middleware('admin');
Route::get('detalle/{id}','ViewController@detalle')->name('detalles');
Route::get('canal/{id}','ViewController@canal')->name('canal');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

});
