<?php
use Illuminate\Support\facades\Route;
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

Route::get('/', 'PostController@index');
// {}の中に書いたものが動的に変動　LaravelのDIを利用するためidではなくpost
Route::get('/posts/{post}', 'PostController@show');