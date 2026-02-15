<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('/')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::prefix('/users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::put('/{id}', [UserController::class, 'update'])->name('users.update');
    Route::put('/{id}/role', [UserController::class, 'updateRole'])->name('users.updateRole');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::prefix('/courses')->group(function () {
    Route::get('/', [CourseController::class, 'index']);
    Route::post('/', [CourseController::class, 'store'])->name('courses.store');
    Route::post('/{id}/enroll', [CourseController::class, 'enroll'])->name('courses.enroll');
    Route::put('/{id}', [CourseController::class, 'update'])->name('courses.update');
    Route::delete('/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');;
});

Route::prefix('/materials')->group(function () {
    Route::get('/', [MaterialController::class, 'index']);
    Route::post('/', [MaterialController::class, 'store'])->name('materials.store');
    Route::get('/{id}/download', [MaterialController::class, 'download'])->name('materials.download');
});
