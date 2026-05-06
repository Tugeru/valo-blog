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

// Agent Dossiers
$agents = [
    'jett', 'phoenix', 'raze', 'reyna', 'yoru', 'neon', 'iso', 'waylay',
    'breach', 'sova', 'skye', 'kayo', 'fade', 'gekko', 'tejo',
    'brimstone', 'viper', 'omen', 'astra', 'harbor', 'clove', 'miks',
    'sage', 'cypher', 'killjoy', 'chamber', 'deadlock', 'vyse', 'veto'
];

foreach ($agents as $agent) {
    Route::get("/agents/{$agent}", function () use ($agent) {
        return view("agents.{$agent}");
    })->name("agents.{$agent}");
}

// Map Intel
$maps = ['ascent', 'breeze', 'fracture', 'haven', 'lotus', 'pearl', 'split'];

foreach ($maps as $map) {
    Route::get("/maps/{$map}", function () use ($map) {
        return view("maps.{$map}");
    })->name("maps.{$map}");
}

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
