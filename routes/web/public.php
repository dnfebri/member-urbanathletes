<?php
use App\Http\Controllers\PublicController;

Route::get('/dev', [PublicController::class, 'home']);