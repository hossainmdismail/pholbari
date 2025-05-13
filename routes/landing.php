<?php
// routes/landing.php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::prefix('landing')->group(function () {
    Route::get('{slug}', [LandingController::class, 'index'])->name('landing.index');
    // return response()->json(['message' => 'Welcome to the Landing Page API']);
});
