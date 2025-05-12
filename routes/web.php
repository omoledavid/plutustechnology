<?php

use App\Http\Controllers\PageSectionController;
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
    Route::get('blog', 'blog')->name('blog');
    Route::get('post/{slug}', 'viewPost')->name('post.show');
    Route::get('contact', 'contact')->name('contact');
});
Route::fallback(function () {
    return view('404');
});
Route::get('/api/pages/{pageName}/sections', [PageSectionController::class, 'getSections']);
Route::put('/api/pages/{pageName}/sections/{sectionKey}', [PageSectionController::class, 'updateSection']);
require __DIR__.'/auth.php';
