<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('principal');
});

Route::get('/register',[RegisterController::class, 'index'])->name('Register');
Route::post('/register',[RegisterController::class, 'store'])->name('Register');

Route::get('/login',[SessionsController::class, 'index'])->name('login');
Route::post('/login',[SessionsController::class, 'store'])->name('login');
Route::post('/logout',[LogoutController::class, 'store'])->name('logout');

Route::get('/Inicio',[PostController::class , 'index'])->name('posts.index');

Route::get('/admin',[AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');