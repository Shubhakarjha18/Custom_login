<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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
})->name('home');

Route::get('/login',[Authmanager::class,'login'])->name('login');
Route::post('/login',[Authmanager::class,'login_post'])->name('login.post');

Route::get('/registration',[Authmanager::class,'registration'])->name('registration');
Route::post('/registration',[Authmanager::class,'registration_post'])->name('registration.post');
Route::get('/logout',[Authmanager::class,'logout'])->name('logout');