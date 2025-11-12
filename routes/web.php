<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Contact Form Route
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// // Articles Routes
// Route::get('/articles', function () {
//     return view('articles.index');
// })->name('articles.index');

// Route::get('/article/{slug}', function ($slug) {
//     return view('articles.show', compact('slug'));
// })->name('article.show');
