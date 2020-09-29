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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'holidays'], function(){
    Route::get('', 'HolidayController@index')->name('holiday.index');
    Route::post('store', 'HolidayController@store')->name('holiday.store');
    Route::get('show/{holiday}', 'HolidayController@show')->name('holiday.show');
 });
 Route::group(['prefix' => 'apis'], function(){
    Route::get('', 'ApiController@index')->name('api.index');
});