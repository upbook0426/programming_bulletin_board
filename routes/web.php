<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('questions')->name('questions.')->group(function () {
    Route::get('create', 'QuestionController@create')->name('create')->middleware('auth');
    Route::post('create', 'QuestionController@store')->middleware('auth');
});

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
    Route::get('questions', 'QuestionController@index')->name('questions.index');
});

require __DIR__.'/auth.php';
