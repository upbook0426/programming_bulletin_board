<?php

// use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\User\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
    Route::get('questions', 'QuestionController@index')->name('questions.index');
});

Route::prefix('question')->name('question.')->group(function () {
    Route::get('input', 'User\QuestionController@index')->name('question.input')->middleware('auth');
    Route::post('input', 'User\QuestionController@store')->middleware('auth');
});

require __DIR__.'/auth.php';
