<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/donation', [DonationController::class, 'showForm'])->name('donate.show');

Route::get('/donate', [DonationController::class, 'showForm'])->name('donate.form');
Route::post('/donate', [DonationController::class, 'processDonation'])->name('donate.process');
Route::get('/donation-success', function () {
    return view('donation.success');
})->name('donation.success');

// Route to process the donation form (if applicable)
Route::post('/donate', [DonationController::class, 'processDonation'])->name('donate.process');

Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile.show');
Route::post('/profile', [ProfileController::class, 'updateProfile'])->name('profile.update');

Route::get('/about', [AboutController::class, 'show'])->name('about.show');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.show');

