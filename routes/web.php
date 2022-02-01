<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\PostsController;

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
Auth::routes();
Route::get('/', function () {
    return view('blog.home');
});


Route::get('/admin', function () {
    return view('content');
});

Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
	Route::resource('category', CategoryController::class);



	Route::resource('tags', TagsController::class);
	Route::get('/posts/deleted', [App\Http\Controllers\PostsController::class, 'post_deleted'])->name('posts.deleted');
	Route::get('/posts/restore/{id_post}', [App\Http\Controllers\PostsController::class, 'restore'])->name('posts.restore');
	Route::delete('/posts/terminate/{id_post}', [App\Http\Controllers\PostsController::class, 'terminate'])->name('posts.terminate');
	Route::resource('posts', PostsController::class);
	Route::get('/search', [App\Http\Controllers\PostsController::class, 'search'])->name('posts.search');
});








