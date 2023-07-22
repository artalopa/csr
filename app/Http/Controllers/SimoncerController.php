<?php

namespace App\Http\Controllers;

use App\Models\Simoncer;
use App\Models\SimoncerCategory;
use Illuminate\Http\Request;

class SimoncerController extends Controller
{
    protected $simoncer;
    protected $category;

    public function __construct(Simoncer $simoncer, SimoncerCategory $category)
    {
        $this->simoncer = $simoncer;
        $this->category = $category;
    }

    public function index()
    {
        $simoncer = $this->simoncer->getPaginate();
        $recent = $this->simoncer->getRecent();
        $slider = $this->simoncer->getSlider();
        return view('information_simoncer.index', compact(['simoncer', 'recent', 'slider']));
    }

    public function show($slug)
    {
        $simoncer = $this->simoncer->getDetail($slug);
        $recent = $this->simoncer->getRecent();
        return view('information_simoncer.show', compact(['simoncer', 'recent']));
    }

    public function getByCategory($slug)
    {
        $category = $this->category->getDetail($slug);
        $simoncer = $this->simoncer->getByCategory($category->id);

        return view('information_simoncer.category', compact('category', 'simoncer'));
    }
}
