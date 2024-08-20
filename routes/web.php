<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.admin');
});

Route::post('/submit-form', [AdminController::class, 'index'])->name('submit.form');
Route::post('/admin/store', [AdminController::class, 'index'])->name('admin.store');
