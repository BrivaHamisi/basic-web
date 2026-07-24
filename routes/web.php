<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\TestimonialsController;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');
});


Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
Route::post('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');
Route::get('/verify', [AdminController::class, 'showVerification'])->name('custom.verification.form');
Route::post('/verify', [AdminController::class, 'verificationVerify'])->name('custom.verification.verify');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');
    Route::post('/profile/store', [AdminController::class, 'ProfileStore'])->name('profile.store');
    Route::post('/profile/password/update', [AdminController::class, 'PasswordUpdate'])->name('admin.password.update');
});

Route::middleware('auth')->group(function () {
    Route::controller(TestimonialsController::class)->group(function () {
        Route::get('/testimonials', 'Testimonials')->name('testimonials');

        //Add and Store Testimonial
        Route::get('/testimonials/create', 'create')->name('testimonials.create');
        Route::post('/testimonials', 'store')->name('testimonials.store');
        
        Route::get('/testimonials/{testimonial}/edit', 'edit')->name('testimonials.edit');
        Route::put('/testimonials/{testimonial}', 'update')->name('testimonials.update');
        Route::delete('/testimonials/{testimonial}', 'destroy')->name('testimonials.destroy');
    });
});

require __DIR__ . '/auth.php';
