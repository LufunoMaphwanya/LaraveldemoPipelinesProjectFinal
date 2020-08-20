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


Route::get('/welcome', function () {
    return 'welcome to me';
});



Route::get('/pipelines', 'PipelinesController@showall');
Route::get('/pipeline', 'PipelinesController@showone');
Route::get('/pipeline/run', 'PipelinesController@run');

Route::get('/columns', 'ColumnsController@showall');
Route::get('/column', 'ColumnsController@showone');

