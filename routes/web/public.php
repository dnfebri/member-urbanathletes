<?php
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/dev', function () { return view("public/index");});
Route::get('/aboutus', function () { return view("public/about/aboutus");})->name('aboutus');
Route::get('/terms-conditions', function () { return view("public/about/terms-conditions");})->name('termsConditions');
Route::get('/the-valor', function () { return view("public/program/the-valor");})->name('theValor');
Route::get('/personal-training', function () { return view("public/program/personal-training");})->name('personalTraining');
Route::get('/group-exercise', function () {return view("public/program/group-exercise");});
Route::get('/online-schedule', function () { return view("public/program/online-schedule");})->name('onlineSchedule');
Route::get('/success-story', function () { return view("public/program/success-story");})->name('successStory');
// Route::get('/media', [PublicController::class, 'media'])->name('media');
Route::get('/media', function () { return view("public/articles/media");});
Route::get('/resmi-dibuka-urban-athletes-marvell-city-hadirkan-the-valor', function () { return view("public/articles/media/resmi-dibuka-urban-athletes-marvell-city-hadirkan-the-valor");});
Route::get('/menjaga-kebugaran-tanpa-terikat-jadwal-dan-waktu', function () { return view("public/articles/media/menjaga-kebugaran-tanpa-terikat-jadwal-dan-waktu");});
Route::get('/pertama-di-jatim-urban-athletes-kenalkan-virtual-fitness-studio', function () { return view("public/articles/media/pertama-di-jatim-urban-athletes-kenalkan-virtual-fitness-studio");});
Route::get('/verawaty-budiyanto-pendiri-urban-athletes-membuat-orang-ketagihan-hidup-sehat', function () { return view("public/articles/media/verawaty-budiyanto-pendiri-urban-athletes-membuat-orang-ketagihan-hidup-sehat");});
Route::get('/berganti-nama-urban-athletes-targetkan-buka-lima-cabang-di-surabaya', function () { return view("public/articles/media/berganti-nama-urban-athletes-targetkan-buka-lima-cabang-di-surabaya");});
Route::get('/urban-athletes-akan-buka-5-cabang-lagi-tahun-depan', function () { return view("public/articles/media/urban-athletes-akan-buka-5-cabang-lagi-tahun-depan");});
Route::get('/verawaty-budiyanto-banyak-orang-menemukan-hidup-berkat-gym', function () { return view("public/articles/media/verawaty-budiyanto-banyak-orang-menemukan-hidup-berkat-gym");});
Route::get('/rayakan-ulang-tahun-pertama-urban-fitness-hadir-dengan-logo-dan-nama-baru', function () { return view("public/articles/media/rayakan-ulang-tahun-pertama-urban-fitness-hadir-dengan-logo-dan-nama-baru");});
Route::get('/rayakan-ultah-pertama-urban-fitness-bertransformasi-jadi-urban-athletes', function () { return view("public/articles/media/rayakan-ultah-pertama-urban-fitness-bertransformasi-jadi-urban-athletes");});

// Route::get('/blog', [PublicController::class, 'blog'])->name('blog');
Route::get('/blog', function () { return view("public/articles/blog");});
Route::get('/healthy-food-6-walnuts', function () { return view("public/articles/blog/healthy-food-6-walnuts");});
Route::get('/mobile-app-member', function () { return view("public/member/mobile-app-member");})->name('mobileAppMember');



