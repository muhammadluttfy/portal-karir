<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Post;

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

Route::get('/', function () {
  return view('welcome', [
    "title" => "Temukan Karir Masa Depanmu",
    "active" => 'welcome',
    'categories' => Category::all(),
    "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
  ]);
})->name('welcome');

Route::get('/term-and-conditions', function () {
  return view('term-conditions', [
    "title" => "Term & Conditions and FaQ",
    "active" => "term-and-conditions",
    'categories' => Category::all(),
  ]);
})->name('term-and-conditions');

Route::get('/careers', [PostController::class, 'index'])->name('careers');
Route::get('careers/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function (Post $post) {
  return view('categories', [
    'title' => 'All Categories',
    'active' => 'categories',
    'categories' => Category::all(),
    'posts' => Post::latest()->filter(request(['search', 'category', 'author']))
      ->paginate(9)->withQueryString(),
    'post_count' => $post,
  ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'autenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register-team-pk', [RegisterController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register-team-pk', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
  return view('dashboard.index');
})->name('dashboard')->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
