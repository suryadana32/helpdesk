<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BlogController;

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
Route Back End
*/
Auth::routes();
Route::get('/',  [App\Http\Controllers\BlogController::class, 'index'])->name('index');


Route::group(['middleware' => 'auth'], function(){
	Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
	Route::resource('category', CategoryController::class);

	Route::resource('tags', TagsController::class);
	Route::get('/posts/deleted', [App\Http\Controllers\PostsController::class, 'post_deleted'])->name('posts.deleted');
	Route::get('/posts/restore/{id_post}', [App\Http\Controllers\PostsController::class, 'restore'])->name('posts.restore');
	Route::delete('/posts/terminate/{id_post}', [App\Http\Controllers\PostsController::class, 'terminate'])->name('posts.terminate');
	Route::resource('posts', PostsController::class);
	Route::post('posts/ckeditor/upload', [App\Http\Controllers\PostsController::class, 'ck_upload'])->name('ckeditor.upload');
	Route::get('/search', [App\Http\Controllers\PostsController::class, 'search'])->name('posts.search');
});

/*
Route Front End

*/
Route::get('/blog/{slug_post}',  [App\Http\Controllers\BlogController::class, 'isi_blog'])->name('blog.isi');
Route::get('/blogs/search',  [App\Http\Controllers\BlogController::class, 'blog_search'])->name('blog.search');
Route::get('/categories/{slug}',  [App\Http\Controllers\BlogController::class, 'category_blog'])->name('blog.category');
Route::get('/product',  [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/product/fnb',  [App\Http\Controllers\ProductController::class, 'category_fnb'])->name('product.fnb');
Route::get('/product/retail',  [App\Http\Controllers\ProductController::class, 'category_retail'])->name('product.retail');







