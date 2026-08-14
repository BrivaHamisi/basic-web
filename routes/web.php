<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\TestimonialsController;
use App\Http\Controllers\Backend\SliderController;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('profile', [AdminController::class, 'adminProfile'])->name('profile');
    Route::post('profile/store', [AdminController::class, 'ProfileStore'])->name('profile.store');
    Route::post('profile/password/update', [AdminController::class, 'PasswordUpdate'])->name('password.update');
    Route::get('sliders', [SliderController::class, 'index'])->name('sliders');
    Route::get('sliders/create', [SliderController::class, 'create'])->name('sliders.create');
    Route::post('sliders', [SliderController::class, 'store'])->name('sliders.store');
    Route::get('sliders/{slider}/edit', [SliderController::class, 'edit'])->name('sliders.edit');
    Route::put('sliders/{slider}', [SliderController::class, 'update'])->name('sliders.update');
    Route::delete('sliders/{slider}', [SliderController::class, 'destroy'])->name('sliders.destroy');
});


Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
Route::post('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');
Route::get('/verify', [AdminController::class, 'showVerification'])->name('custom.verification.form');
Route::post('/verify', [AdminController::class, 'verificationVerify'])->name('custom.verification.verify');


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
