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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/lokasiwisata', 'LokasiWisataController@index')->name('wisata');
Route::get('/lokasiwisata', function () {
    return view('lokasiwisata');
})->name('lokasiwisata');

Route::get('/monitoring', 'MonitoringController@index')->name('monitoring');
Route::get('/monitoring', function () {
    return view('monitoring');
})->name('monitoring');

Route::get('/place/data', 'DataController@places')->name('place.data'); // DATA TABLE CONTROLLER

Route::group(['middleware' => ['auth']], function () {
    Route::resource('places', 'LokasiWisataController');
});

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blank', function () {
    return view('blank');
})->name('blank');
