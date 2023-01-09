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
Route::group(['prefix' => 'secret'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'App\Http\Controllers\AdminController@index');
        Route::group(['prefix' => 'dashboard'], function () {
            Route::get('/', 'App\Http\Controllers\AdminController@dash');
        });
        Route::group(['prefix' => 'menu'], function () {
            Route::get('/', 'App\Http\Controllers\MasakanController@index');
        });
        Route::group(['prefix' => 'detailpesanan'], function () {
            Route::get('/', 'App\Http\Controllers\DetailPesananController@index');
        });
        Route::group(['prefix' => 'user'], function () {
            Route::get('/', 'App\Http\Controllers\UserController@index');
        });
        Route::group(['prefix' => 'meja'], function () {
            Route::get('/', 'App\Http\Controllers\MejaController@index');
        });
        Route::group(['prefix' => 'pesanan'], function () {
            Route::get('/', 'App\Http\Controllers\PesananController@index');
        });
    });
});
