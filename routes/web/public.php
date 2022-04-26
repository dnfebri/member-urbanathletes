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
// Route::get('/media', [PublicController::class, 'media'])->name('media');
Route::get('/media', function () { return view("public/articles/media");});
Route::get('/resmi-dibuka-urban-athletes-marvell-city-hadirkan-the-valor', function () { return view("public/articles/media/resmi-dibuka-urban-athletes-marvell-city-hadirkan-the-valor");});
Route::get('/menjaga-kebugaran-tanpa-terikat-jadwal-dan-waktu', function () { return view("public/articles/media/menjaga-kebugaran-tanpa-terikat-jadwal-dan-waktu");});
Route::get('/pertama-di-jatim-urban-athletes-kenalkan-virtual-fitness-studio', function () { return view("public/articles/media/pertama-di-jatim-urban-athletes-kenalkan-virtual-fitness-studio");});
Route::get('/verawaty-budiyanto-pendiri-urban-athletes-membuat-orang-ketagihan-hidup-sehat', function () { return view("public/articles/media/verawaty-budiyanto-pendiri-urban-athletes-membuat-orang-ketagihan-hidup-sehat");});
Route::get('/berganti-nama-urban-athletes-targetkan-buka-lima-cabang-di-surabaya', function () { return view("public/articles/media/berganti-nama-urban-athletes-targetkan-buka-lima-cabang-di-surabaya");});

Route::get('/blog', [PublicController::class, 'blog'])->name('blog');
Route::get('/mobile-app-member', [PublicController::class, 'mobileAppMember'])->name('mobileAppMember');
