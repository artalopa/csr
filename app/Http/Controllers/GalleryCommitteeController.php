<?php

namespace App\Http\Controllers;

use App\Models\GalleryCommittee;
use App\Models\GalleryCommitteeCategory;
use Illuminate\Http\Request;

class GalleryCommitteeController extends Controller
{
    protected $gallery;
    protected $category;

    public function __construct(GalleryCommittee $gallery, GalleryCommitteeCategory $category)
    {
        $this->gallery = $gallery;
        $this->category = $category;
    }

    public function index()
    {
        $galleries = $this->gallery->getPaginate();
        return view('galleries_committee.index', compact(['galleries']));
    }

    public function show($slug)
    {
        $gallery = $this->gallery->getDetail($slug);
        $recent = $this->gallery->getRecent();
        return view('galleries_committee.show', compact(['gallery', 'recent']));
    }

    public function getByCategory($slug)
    {
        $category = $this->category->getDetail($slug);
        $galleries = $this->gallery->getByCategory($category->id);

        return view('galleries_committee.index', compact('category', 'galleries'));
    }
}
