<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->middleware('auth')->group(function(){
   
});
Route::get('/trips', [App\Http\Controllers\AdminController::class, 'index'])->name('trips.index');
Route::post('/trips', [AdminController::class, 'store'])->name('trajet.store');
Route::post('/trips', [App\Http\Controllers\AdminController::class, 'store'])->name('trips.store');
Route::get('/trips/{id}/edit', [App\Http\Controllers\AdminController::class, 'edit'])->name('trips.edit');
Route::put('/trips/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('trips.update');
Route::delete('/trips/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('trips.destroy');
Route::get('/trajet', [App\Http\Controllers\AdminController::class, 'create']);
Route::get('/', [RegisterController::class, 'create'])->name('create');
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/check', [LoginController::class, 'check'])->name('check');