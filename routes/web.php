<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Welcome Page - Today's Tasks
Route::get('/', [TaskController::class, 'welcome']);

// All Tasks Page
Route::get('/tasks', [TaskController::class, 'tasks']);

// Profile Page
Route::get('/profile', [TaskController::class, 'profile']);

// About Page
Route::get('/about', [TaskController::class, 'about']);
