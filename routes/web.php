<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/users', [HomeController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [HomeController::class, 'show'])->name('users.show');
Route::delete('/users/{user}', [HomeController::class, 'destroy'])->name('users.destroy');
Route::get('/users/{user}/edit', [HomeController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [HomeController::class, 'update'])->name('users.update');
