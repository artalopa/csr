<?php

namespace App\Http\Controllers;

use App\Models\GalleryCsr;
use App\Models\GalleryCsrCategory;
use Illuminate\Http\Request;

class GalleryCsrController extends Controller
{
    protected $gallery;
    protected $category;

    public function __construct(GalleryCsr $gallery, GalleryCsrCategory $category)
    {
        $this->gallery = $gallery;
        $this->category = $category;
    }

    public function index()
    {
        $galleries = $this->gallery->getPaginate();
        return view('galleries_csr.index', compact(['galleries']));
    }

    public function show($slug)
    {
        $gallery = $this->gallery->getDetail($slug);
        $recent = $this->gallery->getRecent();
        return view('galleries_csr.show', compact(['gallery', 'recent']));
    }

    public function getByCategory($slug)
    {
        $category = $this->category->getDetail($slug);
        $galleries = $this->gallery->getByCategory($category->id);

        return view('galleries_csr.index', compact('category', 'galleries'));
    }
}
