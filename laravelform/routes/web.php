<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


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
   return view('auth.login');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {
    route::get('/dashboard', [MahasiswaController::class, 'index']);
    route::get('/create', [MahasiswaController::class, 'create']);
    route::get('/show/{id}', [MahasiswaController::class, 'show']);
    Route::post('/store', [MahasiswaController::class, 'store']);
    //Route::post('/update/{id}',[MahasiswaController::class, 'update']);
    Route::put('/update/{id}', [MahasiswaController::class, 'update']);
    route::get('/destroy/{id}', [MahasiswaController::class, 'destroy']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
