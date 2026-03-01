<?php

use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;

// public route
Route::livewire('/', 'public.homepage.homepage')->name('/');
Route::get('/login', function () {
    return redirect('/')->with('error', 'Sesi Anda telah berakhir. Silakan login kembali untuk melanjutkan.');
})->name('login');

// authentication
Route::post('/logout', [GoogleController::class, 'logout'])->name('logout');
Route::get('/auth/google', [GoogleController::class, 'redirect'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'callback']);

// user dashboard Area
Route::middleware(['auth'])->group(function () {
    // Route::livewire('/dashboard', 'pages.buyer.template.template-list')->name('buyer.dashboard');
    // Route::livewire('/invitation/{id}/edit', 'pages.buyer.invitation.invitation-form')->name('buyer.invitation.edit'); // Tambahkan ini
    // Route::livewire('/invitation/{id}/guests', 'pages.buyer.guest.guest-list')->name('buyer.guests');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::livewire('/dashboard', 'admin.dashboard.dashboard')->name('admin.dashboard');
    Route::livewire('/templates', 'admin.template.template-list')->name('admin.templates.index');
});
