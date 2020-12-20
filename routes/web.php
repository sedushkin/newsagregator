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

Route::get('/', [
    'uses'=>'IndexController@index'
]);
Route::get('/news/category', [
    'uses'=>'News/AllCategoryController@index'
]);
Route::get('/news/category/{id}', [
    'uses'=>'News/CurrentCategoryController@index'
]);
Route::get('/news/{id}', [
    'uses'=>'News/NewsController@index'
]);
Route::get('/news/add', [
    'uses'=>'News/AddController@index'
]);
Route::get('/auth', [
    'uses'=>'Auth/IndexController@index'
]);

