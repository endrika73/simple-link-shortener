<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('signup', [AuthController::class, 'getSignupPage'])->name('get_signup_page');
});
