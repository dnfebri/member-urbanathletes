<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;


Route::get('/content', [PublicController::class, 'home']);

Route::get('/', [ContentController::class, 'index']);