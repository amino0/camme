<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteController;

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

Route::get('/', [siteController::class, 'index'])->name('home');
Route::get('/actualites/{id}', [siteController::class, 'blog']);
Route::get('/apropos', [siteController::class, 'apropos']);
Route::get('/contact', [siteController::class, 'contact']);
Route::get('/motdudirecteur', [siteController::class, 'motdudirecteur']);
Route::get('/mission', [siteController::class, 'motdudirecteur']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
