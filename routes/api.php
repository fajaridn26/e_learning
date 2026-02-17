<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\DiscussionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/discussions', [DiscussionController::class, 'store'])->name('discussions.store');
    Route::post('/discussions/{id}/replies', [DiscussionController::class, 'replies'])->name('discussions.replies');
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
