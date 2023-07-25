<?php

namespace App\Http\Controllers;

use App\Models\BannerHome;
use App\Models\GalleryCommittee;
use App\Models\GalleryCsr;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $bannerHome;
    protected $category;
    protected $news;
    protected $kegiatanCsr;
    protected $kegiatanKomite;

    public function __construct(BannerHome $bannerHome, NewsCategory $category, News $news, GalleryCsr $kegiatanCsr, GalleryCommittee $kegiatanKomite)
    {
        $this->bannerHome = $bannerHome;
        $this->category = $category;
        $this->news = $news;
        $this->kegiatanCsr = $kegiatanCsr;
        $this->kegiatanKomite = $kegiatanKomite;
    }
    public function index()
    {
        // $bannerHome = $this->bannerHome->getData();
        // $categories = $this->category->getAll();
        // $news = $this->news->getPaginate();
        $slider = $this->news->getSlider();
        $recent = $this->news->getHomeRecent();
        $kegiatanCsr = $this->kegiatanCsr->getHome();
        $kegiatanKomite = $this->kegiatanKomite->getHome();
        return view('welcome', compact('slider', 'recent', 'kegiatanCsr', 'kegiatanKomite'));
    }
}
