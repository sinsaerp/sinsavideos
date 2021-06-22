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

Route::get('subir','ViewController@videos')->name('subir-videos');
Route::get('videos','ViewController@pageVideos')->name('videos');
Route::get('categorias','ViewController@categorias')->name('categorias');
Route::get('detalle/{id}','ViewController@detalle')->name('detalles');
Route::get('canal/{id}','ViewController@canal')->name('canal');
