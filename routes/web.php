<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});
//admin controller
Route::get('admin', [AdminController::class, 'index_admin']);
Route::get('/category', [AdminController::class, 'insertForm'])->name('category');
