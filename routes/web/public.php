<?php
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/dev', [PublicController::class, 'home']);
Route::get('/aboutus', [PublicController::class, 'aboutus'])->name('aboutus');
Route::get('/terms-conditions', [PublicController::class, 'termsConditions'])->name('termsConditions');
Route::get('/the-valor', [PublicController::class, 'theValor'])->name('theValor');
Route::get('/personal-training', [PublicController::class, 'personalTraining'])->name('personalTraining');


