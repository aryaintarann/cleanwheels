<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::post('/book', [BookingController::class, 'store'])->name('book.store');

Route::get('/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/booking/success', function () {
    return view('booking_success');
})->name('booking.success');

Route::put('/bookings/{booking}/status', [AdminController::class, 'updateStatus'])
    ->middleware(['auth', 'verified'])
    ->name('bookings.update-status');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
