<?php

use App\Http\Controllers\Admin\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('questions', [QuestionController::class, 'index'])->name('questions.index');
});

require __DIR__.'/auth.php';
