<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::get('/courses', [CourseController::class, 'index'])
        ->name('courses.index');

    // Route khusus testing RBAC
    Route::get('/admin-secret', function () {
        return "<h1>Sangat Rahasia: Selamat datang di area Admin!</h1>";
    })->middleware('role:admin');
});

require __DIR__ . '/settings.php';