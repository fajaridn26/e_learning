<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
});
