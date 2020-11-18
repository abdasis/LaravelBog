<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Analytics\Period;
use Illuminate\Support\Collection;

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

Route::get('/', 'PostController@home')->name('beranda');
Route::post('/posts/upload', 'PostController@upload')->name('posts.upload')->middleware('auth');
Route::resource('posts', 'PostController')->except([
    'show',
])->middleware('auth');
Route::get('logbook/{logbook}/selesai', 'LogBookController@selesai')->name('logbook.selesai')->middleware('auth');
Route::get('logbook/laporan', 'LogBookController@lapor')->name('logbook.lapor')->middleware('auth');
Route::resource('logbook', 'LogBookController')->middleware('auth');
Route::get('/{artikel}', 'PostController@show')->name('posts.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get([
    'register' => 'false'
]);
