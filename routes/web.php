<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::resource('tasks', TaskController::class);
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
