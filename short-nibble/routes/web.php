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
Route::get('pages.forum', [ForumController::class, 'show'])->name('forum');
Route::get('pages.login', [LoginController::class, 'show'])->name('login');
Route::get('pages.register', [RegisterController::class, 'show'])->name('register');

Route::get('pages.stories', [StoriesController::class, 'index'])->name('stories');
Route::get('pages.story.{story}', [StoriesController::class, 'show'])->name('story');

Route::get('pages.author', [AuthorDetailController::class, 'show'])->name('authorDetail');


