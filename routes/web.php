<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\WelcomeController;

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

Route::get('pages/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [WelcomeController::class, 'showWelcome'])->name('welcome');
Route::get('pages/skills', [WelcomeController::class, 'showSkills'])->name('skills');
Route::get('pages/random', [WelcomeController::class, 'showRandom'])->name('random');
Route::get('pages/about', [WelcomeController::class, 'showAbout'])->name('about');

Route::get('pages/authors', [AuthorsController::class, 'index'])->name('authors');
Route::get('pages/author.{author}', [AuthorsController::class, 'show'])->name('author');

Route::get('pages/forum', [ForumController::class, 'index'])->name('forum');
Route::get('pages/user/{comments}',[ForumController::class, 'showUser'])->name('user');
Route::get('pages/comment/{comments}',[ForumController::class, 'showComment'])->name('comment');
Route::post('pages/comment/{comments}',[ForumController::class, 'createComment'])->name('createcomment');


Route::get('pages/register', [RegisterController::class, 'show'])->name('register')->middleware('guest');
Route::post('pages/register', [RegisterController::class, 'store'])->name('store')->middleware('guest');

Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::get('pages/login', [LoginController::class, 'show'])->name('login')->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('pages/stories', [StoriesController::class, 'index'])->name('stories');
Route::get('pages/story/{story}', [StoriesController::class, 'show'])->name('story');

Route::get('pages/stories', [StoriesController::class, 'index'])->name('stories');
Route::get('pages/story/{story}', [StoriesController::class, 'show'])->name('story');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
