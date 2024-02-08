<?php

use Illuminate\Support\Facades\Route;
use Kaamrul\Contact\Http\Controllers\ContactController;



    
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::post('contact', [ContactController::class, 'store']);

