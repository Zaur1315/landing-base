<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/thank-you', [PageController::class, 'thankYou'])->name('thank-you');

Route::get('/privacy.html', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms.html', [PageController::class, 'terms'])->name('terms');

Route::get('/webmail', [PageController::class, 'webmail'])->name('webmail');

Route::get('/robots.txt', [PageController::class, 'robots'])->name('robots');
Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');
