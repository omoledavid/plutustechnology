<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('about', 'about')->name('about');
    Route::get('services', 'services')->name('services');
});
Route::fallback(function () {
    return view('404');
});
require __DIR__.'/auth.php';
