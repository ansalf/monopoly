<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/board', function () {
    return view('board');
});

// Login Routes
Route::get('/logout', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Register Routes
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store'])->name('store');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dice', function () {
    return view('dice');
});

Route::get('/settings', function () {
    return view('settings');
});

// Route Settingan
Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
Route::post('/settings/save', [SettingsController::class, 'save'])->name('settings.save');

