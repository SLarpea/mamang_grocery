<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InertiaController;

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

Route::get('/', [InertiaController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'loginForm'])->name('loginForm');

// Route::get('/', function () {
//     return view('welcome');
// });
