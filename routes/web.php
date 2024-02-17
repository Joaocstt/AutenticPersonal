<?php

use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('contato',[ContactController::class, 'index'])->name('site.contact');
Route::post('store', [ContactController::class, 'store'])->name('site.store');
