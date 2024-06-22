<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;

Route::get('/profile/1', [ProfileController::class, 'profile']);
