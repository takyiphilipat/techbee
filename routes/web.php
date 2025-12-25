<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::name('users.')->group(function () {
// ✅ CLEAN HOME ROUTE
    Route::get('/', [HomeController::class, 'index'])->name('welcome');

// ✅ FIXED ABOUT ROUTE
    Route::get('/about', [HomeController::class, 'index'])->name('about');


    //✅ FIXED WORK ROUTE
    Route::get('/work', [HomeController::class, 'index'])->name('work');

    //✅ FIXED TESTIMONIAL ROUTe

    Route::get('/testimonial', [HomeController::class, 'index'])->name('testimonial');

    //start services route
    Route::get('/services', [HomeController::class, 'index'])->name('services');
    //end services route


   // ✅ CLEAN CONTACT ROUTES
    Route::get('/contact', [ContactController::class, 'show'])->name('contact');
    Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

});
