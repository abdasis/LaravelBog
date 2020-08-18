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

Auth::routes([
    'register' => false,
]);
Route::get('/', 'PostController@home')->name('beranda');
Route::post('/posts/upload', 'PostController@upload')->name('posts.upload')->middleware('auth');
Route::get('backup', function(){
    Spatie\DbDumper\Databases\MySql::create()
    ->setDbName('cms-blog')
    ->setUserName('root')
    ->setPassword('')
    ->dumpToFile('dump.sql');
})->middleware('auth');
Route::resource('posts', 'PostController')->except([
    'show',
])->middleware('auth');
Route::get('/{artikel}', 'PostController@show')->name('posts.show');


Route::get('/home', function(){
    return redirect('posts');
})->name('home');
