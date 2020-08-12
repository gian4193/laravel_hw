<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes fo      r your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/example_get', 'tablecontroller@selectMovieByIdWithResource')->name('example_get');
Route::get('/two_get', 'tablecontroller@insertDataResource')->name('two_get');
Route::get('/three_get', 'tablecontroller@deleteDataResource')->name('three_get');
Route::get('/four_get', 'tablecontroller@updateDataResource')->name('four_get');
Route::get('/record_get', 'tablecontroller@recordResource')->name('record_get');
