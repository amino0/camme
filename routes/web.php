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



Route::get('/','homecontroller@index');
Route::get('/motdudirecteur','homecontroller@mot');
Route::get('/apropos','homecontroller@apropos');
Route::get('/organisation','homecontroller@organisation');
Route::get('/contact','homecontroller@contact');
Route::get('/actualite/{id}','homecontroller@actualite');
Route::get('/juridique','homecontroller@juridique');
Route::get('/download/{id}','homecontroller@show');
Route::get('/login','ecommandecontroller@login');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
