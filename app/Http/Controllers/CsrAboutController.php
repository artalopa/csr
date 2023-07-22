<?php

namespace App\Http\Controllers;

use App\Models\CsrAbout;
use App\Models\CsrAboutCategory;
use Illuminate\Http\Request;

class CsrAboutController extends Controller
{
    protected $csr_about;
    protected $category;

    public function __construct(CsrAbout $csr_about, CsrAboutCategory $category)
    {
        $this->csr_about = $csr_about;
        $this->category = $category;
    }

    public function index()
    {
        $csr_about = $this->csr_about->getPaginate();
        $recent = $this->csr_about->getRecent();
        $slider = $this->csr_about->getSlider();
        return view('information_csr_about.index', compact(['csr_about', 'recent', 'slider']));
    }

    public function show($slug)
    {
        $csr_about = $this->csr_about->getDetail($slug);
        $recent = $this->csr_about->getRecent();
        return view('information_csr_about.show', compact(['csr_about', 'recent']));
    }

    public function getByCategory($slug)
    {
        $category = $this->category->getDetail($slug);
        $csr_about = $this->csr_about->getByCategory($category->id);

        return view('information_csr_about.category', compact('category', 'csr_about'));
    }
}
