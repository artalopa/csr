<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CsrAboutController;
use App\Http\Controllers\CsrProgramController;
use App\Http\Controllers\CsrSectorController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryCommitteeController;
use App\Http\Controllers\GalleryCsrController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SimoncerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', [HomeController::class, 'index']);

// // news
// Route::get('/news', [NewsController::class, 'index']);
// Route::get('/news/{slug}', [NewsController::class, 'detail']);
// Route::get('/news/category/{slug}', [NewsController::class, 'getByCategory']);

// // Information
// Route::get('/about', [AboutController::class, 'index']);
// Route::get('/faq', [FaqController::class, 'index']);
// Route::get('/contact', [ContactController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/report')->group(function () {

    Route::get('/years', function () {
        return view('report.years');
    });
    Route::get('/program', function () {
        return view('report.program');
    });
    Route::get('/sector', function () {
        return view('report.sector');
    });
    Route::get('/company', function () {
        return view('report.company');
    });
});

Route::prefix('/portofolio')->group(function () {
    Route::get('/', function () {
        return view('portofolio.portofolio');
    });
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::prefix('/profile')->group(function () {
    Route::get('/jepara', [ProfileController::class, 'jepara'])->name('profile.jepara');
    Route::get('/komite', [ProfileController::class, 'komite'])->name('profile.komite');
    Route::get('/regulation', [ProfileController::class, 'regulasi'])->name('profile.regulasi');
    Route::get('/moncer', function () {
        return view('profiles.moncer');
    });
});

Route::prefix('/information')->group(function () {
    Route::get('/simoncer', [SimoncerController::class, 'index'])->name('simoncer-web.index');
    Route::get('/simoncer/{slug}', [SimoncerController::class, 'show'])->name('simoncer-web.show');

    Route::get('/csr-about', [CsrAboutController::class, 'index'])->name('csr-about-web.index');
    Route::get('/csr-about/{slug}', [CsrAboutController::class, 'show'])->name('csr-about-web.show');

    Route::get('/csr-program', [CsrProgramController::class, 'index'])->name('csr-program-web.index');
    Route::get('/csr-program/{slug}', [CsrProgramController::class, 'show'])->name('csr-program-web.show');

    Route::get('/csr-sector', [CsrSectorController::class, 'index'])->name('csr-sector-web.index');
    Route::get('/csr-sector/{slug}', [CsrSectorController::class, 'show'])->name('csr-sector-web.show');

    Route::get('/csr-news', [NewsController::class, 'index'])->name('news-web.index');
    Route::get('/csr-news/{slug}', [NewsController::class, 'show'])->name('news-web.show');
});

Route::prefix('/gallery-csr')->group(function () {
    Route::get('/', [GalleryCsrController::class, 'index'])->name('gallery-csr-web.index');
    Route::get('/details/{slug}', [GalleryCsrController::class, 'show'])->name('gallery-csr-web.show');
});

Route::prefix('/gallery-committee')->group(function () {
    Route::get('/', [GalleryCommitteeController::class, 'index'])->name('gallery-committee-web.index');
    Route::get('/details/{slug}', [GalleryCommitteeController::class, 'show'])->name('gallery-committee-web.show');
});
