<?php
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/dev', [PublicController::class, 'home']);
Route::get('/aboutus', [PublicController::class, 'aboutus'])->name('aboutus');
Route::get('/terms-conditions', [PublicController::class, 'termsConditions'])->name('termsConditions');
Route::get('/the-valor', [PublicController::class, 'theValor'])->name('theValor');
Route::get('/personal-training', [PublicController::class, 'personalTraining'])->name('personalTraining');
Route::get('/group-exercise', function () {return view("public/program/group-exercise");});
Route::get('/online-schedule', [PublicController::class, 'onlineSchedule'])->name('onlineSchedule');
Route::get('/success-story', [PublicController::class, 'successStory'])->name('successStory');
Route::get('/media', [PublicController::class, 'media'])->name('media');

