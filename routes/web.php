<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/news', [PublicController::class, 'news'])->name('news.index');
Route::get('/guides', [PublicController::class, 'guides'])->name('news.guides');
Route::get('/patches', [PublicController::class, 'patches'])->name('news.patches');
Route::get('/posts/{post}', [PublicController::class, 'show'])->name('posts.show');

Route::get('/agents/jett', function () {
    return view('agents.show', ['agent' => 'Jett']);
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/posts/create', [AdminController::class, 'create'])->name('admin.posts.create');
    Route::post('/posts', [AdminController::class, 'store'])->name('admin.posts.store');
    Route::get('/posts/{post}/edit', [AdminController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/posts/{post}', [AdminController::class, 'update'])->name('admin.posts.update');
    Route::delete('/posts/{post}', [AdminController::class, 'destroy'])->name('admin.posts.destroy');
});
