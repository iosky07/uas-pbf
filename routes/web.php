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

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');


Route::resources([
    'articles' => 'ArticleController',
    'suggestions' => 'SuggestionController',
    'comments' => 'CommentController',
    'users' => 'HomeController',
    'manage-users' => 'UserController'
]);
Route::get('about',[\App\Http\Controllers\SiteController::class,'about'])->name('about');
Route::get('blog',[\App\Http\Controllers\SiteController::class,'blog'])->name('blog');
Route::get('single-blog/{id}/',[\App\Http\Controllers\SiteController::class,'singleBlog'])->name('single-blog');
Route::get('pagekritik',[\App\Http\Controllers\SiteController::class,'pagekritik'])->name('pagekritik');

Route::get('comment/{id}/',[\App\Http\Controllers\CommentController::class,'updateComment'])->name('update-comment');
Route::get('comment/{id}/{id_article}',[\App\Http\Controllers\CommentController::class,'destroyComment'])->name('destroy-comment');
