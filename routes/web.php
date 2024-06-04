<?php

use App\Http\Controllers\ModuleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [ModuleController::class,'index'])->name('index');
Route::get('/create', [ModuleController::class,'create'])->name('create');
Route::post('/store', [ModuleController::class, 'store'])->name('store');
Route::get('/edit/{item}/edit', [ModuleController::class, 'edit'])->name('edit');
Route::post('/update/{item}', [ModuleController::class, 'update'])->name('update');
Route::delete('/delete/{item}', [ModuleController::class, 'delete'])->name('delete');