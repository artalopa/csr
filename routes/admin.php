<?php

use App\Http\Controllers\Admin\About\AboutController;
use App\Http\Controllers\Admin\Banner\BannerHomeController;
use App\Http\Controllers\Admin\CsrInformation\CsrAbout\CsrAboutCategoryController;
use App\Http\Controllers\Admin\CsrInformation\CsrAbout\CsrAboutController;
use App\Http\Controllers\Admin\CsrInformation\CsrProgram\CsrProgramCategoryController;
use App\Http\Controllers\Admin\CsrInformation\CsrProgram\CsrProgramController;
use App\Http\Controllers\Admin\CsrInformation\CsrSector\CsrSectorCategoryController;
use App\Http\Controllers\Admin\CsrInformation\CsrSector\CsrSectorController;
use App\Http\Controllers\Admin\CsrInformation\Simoncer\SimoncerCategoryController;
use App\Http\Controllers\Admin\CsrInformation\Simoncer\SimoncerController;
use App\Http\Controllers\Admin\Gallery\GalleryCommitteeCategoryController;
use App\Http\Controllers\Admin\Gallery\GalleryCommitteeController;
use App\Http\Controllers\Admin\Gallery\GalleryCsrCategoryController;
use App\Http\Controllers\Admin\Gallery\GalleryCsrController;
use App\Http\Controllers\Admin\Information\InformationController;
use App\Http\Controllers\Admin\KomiteTsp\KomiteTspController;
use App\Http\Controllers\Admin\News\NewsCategoryController;
use App\Http\Controllers\Admin\News\NewsController;
use App\Http\Controllers\Admin\Profile\ProfileJeparaController;
use App\Http\Controllers\Admin\Profile\ProfileKomiteController;
use App\Http\Controllers\Admin\Profile\ProfileRegulasiController;
use App\Http\Controllers\Admin\Report\ReportYearsController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Simoncer
    Route::prefix('/simoncer')->group(function () {
        Route::get('/', [SimoncerController::class, 'index'])->name('simoncer.index');
        Route::get('/create', [SimoncerController::class, 'create'])->name('simoncer.create');
        Route::post('/store', [SimoncerController::class, 'store'])->name('simoncer.store');
        Route::get('/edit/{slug}', [SimoncerController::class, 'edit'])->name('simoncer.edit');
        Route::patch('/update/{slug}', [SimoncerController::class, 'update'])->name('simoncer.update');
        Route::delete('/destroy/{slug}', [SimoncerController::class, 'destroy'])->name('simoncer.destroy');
        Route::prefix('/category')->group(function () {
            Route::get('/', [SimoncerCategoryController::class, 'index'])->name('simoncer-category.index');
            Route::post('/store', [SimoncerCategoryController::class, 'store'])->name('simoncer-category.store');
            Route::patch('/update/{slug}', [SimoncerCategoryController::class, 'update'])->name('simoncer-category.update');
            Route::delete('/destroy/{slug}', [SimoncerCategoryController::class, 'destroy'])->name('simoncer-category.destroy');
        });
    });

    // Csr About
    Route::prefix('/csr-about')->group(function () {
        Route::get('/', [CsrAboutController::class, 'index'])->name('csr-about.index');
        Route::get('/create', [CsrAboutController::class, 'create'])->name('csr-about.create');
        Route::post('/store', [CsrAboutController::class, 'store'])->name('csr-about.store');
        Route::get('/edit/{slug}', [CsrAboutController::class, 'edit'])->name('csr-about.edit');
        Route::patch('/update/{slug}', [CsrAboutController::class, 'update'])->name('csr-about.update');
        Route::delete('/destroy/{slug}', [CsrAboutController::class, 'destroy'])->name('csr-about.destroy');
        Route::prefix('/category')->group(function () {
            Route::get('/', [CsrAboutCategoryController::class, 'index'])->name('csr-about-category.index');
            Route::post('/store', [CsrAboutCategoryController::class, 'store'])->name('csr-about-category.store');
            Route::patch('/update/{slug}', [CsrAboutCategoryController::class, 'update'])->name('csr-about-category.update');
            Route::delete('/destroy/{slug}', [CsrAboutCategoryController::class, 'destroy'])->name('csr-about-category.destroy');
        });
    });

    // Csr Program
    Route::prefix('/csr-program')->group(function () {
        Route::get('/', [CsrProgramController::class, 'index'])->name('csr-program.index');
        Route::get('/create', [CsrProgramController::class, 'create'])->name('csr-program.create');
        Route::post('/store', [CsrProgramController::class, 'store'])->name('csr-program.store');
        Route::get('/edit/{slug}', [CsrProgramController::class, 'edit'])->name('csr-program.edit');
        Route::patch('/update/{slug}', [CsrProgramController::class, 'update'])->name('csr-program.update');
        Route::delete('/destroy/{slug}', [CsrProgramController::class, 'destroy'])->name('csr-program.destroy');
        Route::prefix('/category')->group(function () {
            Route::get('/', [CsrProgramCategoryController::class, 'index'])->name('csr-program-category.index');
            Route::post('/store', [CsrProgramCategoryController::class, 'store'])->name('csr-program-category.store');
            Route::patch('/update/{slug}', [CsrProgramCategoryController::class, 'update'])->name('csr-program-category.update');
            Route::delete('/destroy/{slug}', [CsrProgramCategoryController::class, 'destroy'])->name('csr-program-category.destroy');
        });
    });

    // Csr Sector
    Route::prefix('/csr-sector')->group(function () {
        Route::get('/', [CsrSectorController::class, 'index'])->name('csr-sector.index');
        Route::get('/create', [CsrSectorController::class, 'create'])->name('csr-sector.create');
        Route::post('/store', [CsrSectorController::class, 'store'])->name('csr-sector.store');
        Route::get('/edit/{slug}', [CsrSectorController::class, 'edit'])->name('csr-sector.edit');
        Route::patch('/update/{slug}', [CsrSectorController::class, 'update'])->name('csr-sector.update');
        Route::delete('/destroy/{slug}', [CsrSectorController::class, 'destroy'])->name('csr-sector.destroy');
        Route::prefix('/category')->group(function () {
            Route::get('/', [CsrSectorCategoryController::class, 'index'])->name('csr-sector-category.index');
            Route::post('/store', [CsrSectorCategoryController::class, 'store'])->name('csr-sector-category.store');
            Route::patch('/update/{slug}', [CsrSectorCategoryController::class, 'update'])->name('csr-sector-category.update');
            Route::delete('/destroy/{slug}', [CsrSectorCategoryController::class, 'destroy'])->name('csr-sector-category.destroy');
        });
    });

    // News
    Route::prefix('/news')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('news.index');
        Route::get('/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('/store', [NewsController::class, 'store'])->name('news.store');
        Route::get('/edit/{slug}', [NewsController::class, 'edit'])->name('news.edit');
        Route::patch('/update/{slug}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('/destroy/{slug}', [NewsController::class, 'destroy'])->name('news.destroy');
        Route::prefix('/category')->group(function () {
            Route::get('/', [NewsCategoryController::class, 'index'])->name('news-category.index');
            Route::post('/store', [NewsCategoryController::class, 'store'])->name('news-category.store');
            Route::patch('/update/{slug}', [NewsCategoryController::class, 'update'])->name('news-category.update');
            Route::delete('/destroy/{slug}', [NewsCategoryController::class, 'destroy'])->name('news-category.destroy');
        });
    });

    // Gallery CSR
    Route::prefix('/gallery-csr')->group(function () {
        Route::get('/', [GalleryCsrController::class, 'index'])->name('gallery-csr.index');
        Route::get('/create', [GalleryCsrController::class, 'create'])->name('gallery-csr.create');
        Route::post('/store', [GalleryCsrController::class, 'store'])->name('gallery-csr.store');
        Route::get('/edit/{slug}', [GalleryCsrController::class, 'edit'])->name('gallery-csr.edit');
        Route::patch('/update/{slug}', [GalleryCsrController::class, 'update'])->name('gallery-csr.update');
        Route::delete('/destroy/{slug}', [GalleryCsrController::class, 'destroy'])->name('gallery-csr.destroy');
        Route::prefix('/category')->group(function () {
            Route::get('/', [GalleryCsrCategoryController::class, 'index'])->name('gallery-csr-category.index');
            Route::post('/store', [GalleryCsrCategoryController::class, 'store'])->name('gallery-csr-category.store');
            Route::patch('/update/{slug}', [GalleryCsrCategoryController::class, 'update'])->name('gallery-csr-category.update');
            Route::delete('/destroy/{slug}', [GalleryCsrCategoryController::class, 'destroy'])->name('gallery-csr-category.destroy');
        });
    });

    // Gallery Committee
    Route::prefix('/gallery-committee')->group(function () {
        Route::get('/', [GalleryCommitteeController::class, 'index'])->name('gallery-committee.index');
        Route::get('/create', [GalleryCommitteeController::class, 'create'])->name('gallery-committee.create');
        Route::post('/store', [GalleryCommitteeController::class, 'store'])->name('gallery-committee.store');
        Route::get('/edit/{slug}', [GalleryCommitteeController::class, 'edit'])->name('gallery-committee.edit');
        Route::patch('/update/{slug}', [GalleryCommitteeController::class, 'update'])->name('gallery-committee.update');
        Route::delete('/destroy/{slug}', [GalleryCommitteeController::class, 'destroy'])->name('gallery-committee.destroy');
        Route::prefix('/category')->group(function () {
            Route::get('/', [GalleryCommitteeCategoryController::class, 'index'])->name('gallery-committee-category.index');
            Route::post('/store', [GalleryCommitteeCategoryController::class, 'store'])->name('gallery-committee-category.store');
            Route::patch('/update/{slug}', [GalleryCommitteeCategoryController::class, 'update'])->name('gallery-committee-category.update');
            Route::delete('/destroy/{slug}', [GalleryCommitteeCategoryController::class, 'destroy'])->name('gallery-committee-category.destroy');
        });
    });

    // About Us
    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::post('/about/store', [AboutController::class, 'store'])->name('about.store');
    Route::patch('/about/update/{id}', [AboutController::class, 'update'])->name('about.update');

    // Information
    Route::get('/information', [InformationController::class, 'index'])->name('information.index');
    Route::post('/information/store', [InformationController::class, 'store'])->name('information.store');
    Route::patch('/information/update/{id}', [InformationController::class, 'update'])->name('information.update');

    // Banner
    Route::get('/banner-home', [BannerHomeController::class, 'index'])->name('banner-home.index');
    Route::post('/banner-home/store', [BannerHomeController::class, 'store'])->name('banner-home.store');
    Route::patch('/banner-home/update/{id}', [BannerHomeController::class, 'update'])->name('banner-home.update');

    // Profil
    Route::get('/profile-jepara', [ProfileJeparaController::class, 'index'])->name('profile-jepara.index');
    Route::post('/profile-jepara/store', [ProfileJeparaController::class, 'store'])->name('profile-jepara.store');
    Route::patch('/profile-jepara/update/{id}', [ProfileJeparaController::class, 'update'])->name('profile-jepara.update');

    Route::get('/profile-komite', [ProfileKomiteController::class, 'index'])->name('profile-komite.index');
    Route::post('/profile-komite/store', [ProfileKomiteController::class, 'store'])->name('profile-komite.store');
    Route::patch('/profile-komite/update/{id}', [ProfileKomiteController::class, 'update'])->name('profile-komite.update');

    Route::get('/profile-regulasi', [ProfileRegulasiController::class, 'index'])->name('profile-regulasi.index');
    Route::post('/profile-regulasi/store', [ProfileRegulasiController::class, 'store'])->name('profile-regulasi.store');
    Route::patch('/profile-regulasi/update/{id}', [ProfileRegulasiController::class, 'update'])->name('profile-regulasi.update');

    // Komite TSP
    Route::prefix('/komite-tsp')->group(function () {
        Route::get('/', [KomiteTspController::class, 'index'])->name('komite-tsp.index');
        Route::get('/create', [KomiteTspController::class, 'create'])->name('komite-tsp.create');
        Route::post('/store', [KomiteTspController::class, 'store'])->name('komite-tsp.store');
        Route::get('/edit/{slug}', [KomiteTspController::class, 'edit'])->name('komite-tsp.edit');
        Route::patch('/update/{slug}', [KomiteTspController::class, 'update'])->name('komite-tsp.update');
        Route::delete('/destroy/{slug}', [KomiteTspController::class, 'destroy'])->name('komite-tsp.destroy');
    });

    // Laporan
    Route::get('/report-years', [ReportYearsController::class, 'index'])->name('report-years.index');
    Route::post('/report-years/store', [ReportYearsController::class, 'store'])->name('report-years.store');
    Route::patch('/report-years/update/{id}', [ReportYearsController::class, 'update'])->name('report-years.update');
});
