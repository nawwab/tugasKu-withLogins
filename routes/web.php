<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\StaticPageController;
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
    return view('homepage');
})->name('homepage');

Route::get('/about', function () {
    return view('about');
})->name('about');

//auth
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//homework
Route::get('/dashboard/create', [HomeworkController::class, 'index'])->name('homework.create');
Route::post('/dashboard', [HomeworkController::class, 'store'])->name('homework.store');
Route::get('/dashboard/edit/{edit}', [HomeworkController::class, 'edit'])->name('homework.edit');
Route::put('/dashboard/{edit}', [HomeworkController::class, 'update'])->name('homework.update');
Route::delete('/dashboard/{homework}', [HomeworkController::class, 'destroy'])->name('homework.delete');

//all non admin page
Route::get('/', [StaticPageController::class, 'index'])->name('homepage');
Route::get('/about', [StaticPageController::class, 'about'])->name('about');
Route::get('/help', [StaticPageController::class, 'help'])->name('help');
