<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'articles' => 'ArticleController',
    'suggestions' => 'CriticController'
//    'posts' => 'PostController'
]);
Route::get('about',[\App\Http\Controllers\SiteController::class,'about'])->name('about');
Route::get('blog',[\App\Http\Controllers\SiteController::class,'blog'])->name('blog');
Route::get('singleblog',[\App\Http\Controllers\SiteController::class,'singleblog'])->name('singleblog');
Route::get('pagekritik',[\App\Http\Controllers\SiteController::class,'pagekritik'])->name('pagekritik');

Route::get('critic',[\App\Http\Controllers\CriticController::class,'index'])->name('critic');
