<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::middleware('auth')->prefix('/')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
});

Route::middleware('auth')->get('/user', function (Request $request) {
    return response()->json($request->user());
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [LoginController::class, 'register']);

Route::middleware('auth')->prefix('/users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::put('/{id}', [UserController::class, 'update'])->name('users.update');
    Route::put('/{id}/role', [UserController::class, 'updateRole'])->name('users.updateRole');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::middleware('auth')->prefix('/courses')->group(function () {
    Route::get('/', [CourseController::class, 'index']);
    Route::post('/', [CourseController::class, 'store'])->name('courses.store');
    Route::post('/{id}/enroll', [CourseController::class, 'enroll'])->name('courses.enroll');
    Route::put('/{id}', [CourseController::class, 'update'])->name('courses.update');
    Route::delete('/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');;
});

Route::middleware('auth')->prefix('/materials')->group(function () {
    Route::get('/', [MaterialController::class, 'index']);
    Route::post('/', [MaterialController::class, 'store'])->name('materials.store');
    Route::get('/{id}/download', [MaterialController::class, 'download'])->name('materials.download');
});

Route::middleware('auth')->prefix('/assignments')->group(function () {
    Route::post('/', [AssignmentController::class, 'store'])->name('assignments.store');
});

Route::middleware('auth')->prefix('/submissions')->group(function () {
    Route::get('/', [SubmissionController::class, 'index']);
    Route::get('/tugas-mahasiswa/{assignment}', [SubmissionController::class, 'showTugasMahasiswa'])->name('submissions.tugas-mahasiswa');
    Route::post('/', [SubmissionController::class, 'store'])->name('submissions.store');
    Route::post('/{id}/grade', [SubmissionController::class, 'grade'])->name('submissions.grade');
});

Route::middleware('auth')->prefix('/discussions')->group(function () {
    Route::get('/', [DiscussionController::class, 'index']);
    Route::get('/detail-diskusi/{id}', [DiscussionController::class, 'showDetailDiskusi'])->name('discussions.detail-diskusi');
});
