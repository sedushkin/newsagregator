<?php

use App\Http\Controllers\News\AllCategoryController;
use App\Http\Controllers\News\CurrentCategoryController;
use App\Http\Controllers\News\NewsController;
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
/*
 * * Главная страница
 */
Route::get('/', [
    'uses'=>'IndexController@index'
]);

/*
 * Вывод новостей
 * 'uses'=>'News\AllCategoryController@index'
 */


Route::group([
    'prefix'=>'news',
    'as'=>'news::',
], function(){
   Route::get('/news/category', [
        AllCategoryController::class, 'index'
    ])
    ->name('categories');

    Route::get('/news/category/{id}', [
        CurrentCategoryController::class, 'index'
    ])
    ->name('onecategory')
    ->where('id', '[0-9]+');
    Route::get('/news/{id}', [
        NewsController::class, 'index'
    ])
    ->name('onenews')
        ->where('id', '[0-9]+');
});


/*
 * Редактирование Новостей
 */

Route::get('/news/add', [
    'uses'=>'News/AddController@index'
]);

/*
 * Аутентификация
 */
Route::get('/auth', [
    'uses'=>'Auth/IndexController@index'
]);

