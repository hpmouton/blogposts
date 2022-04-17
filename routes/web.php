<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CommentController;




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

Route::get('/',[HomeController::class, 'home'])->name('home.index');
//contact route
Route::get('/contact',[HomeController::class, 'contact'])->name('home.contact');

//author routes
Route::resource('author', AuthorController::class);

//blog route
Route::resource('blogposts', BlogPostController::class);

//comment route
Route::resource('comments', CommentController::class);




//recent posts route
Route::get('/recent-posts/{days_ago?}', function ($daysAgo = 20) {
    return 'Posts from '.$daysAgo. 'days ago.';
})->name('posts.recent.index');
