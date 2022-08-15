<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\AuthorDetailController;
use App\Http\Controllers\SessionsController;

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

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::get('pages.authors', [AuthorsController::class, 'index'])->name('authors');
Route::get('pages.author.{author}', [AuthorsController::class, 'show'])->name('author');

Route::get('pages.forum', [ForumController::class, 'index'])->name('forum');
Route::get('pages.user.{comments}',[ForumController::class, 'showUser'])->name('user');
Route::get('pages.comment.{comments}',[ForumController::class, 'showComment'])->name('comment');

Route::get('pages.register', [RegisterController::class, 'show'])->name('register')->middleware('guest');
Route::post('pages.register', [RegisterController::class, 'store'])->name('store')->middleware('guest');

Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::get('pages.login', [LoginController::class, 'show'])->name('login')->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('pages.stories', [StoriesController::class, 'index'])->name('stories');
Route::get('pages.story.{story}', [StoriesController::class, 'show'])->name('story');




