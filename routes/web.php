<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::view('/thank-you', 'thank-you')->name('thank-you');

Route::view('/privacy.html', 'legal.privacy')->name('privacy');
Route::view('/terms.html', 'legal.terms')->name('terms');

Route::get('/webmail', function () {
    $url = config('services.webmail.url');

    abort_unless($url, 404);

    return redirect()->away($url);
})->name('webmail');
