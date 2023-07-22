<?php

namespace App\Http\Controllers;

use App\Models\CsrSector;
use App\Models\CsrSectorCategory;
use Illuminate\Http\Request;

class CsrSectorController extends Controller
{
    protected $csr_sector;
    protected $category;

    public function __construct(CsrSector $csr_sector, CsrSectorCategory $category)
    {
        $this->csr_sector = $csr_sector;
        $this->category = $category;
    }

    public function index()
    {
        $csr_sector = $this->csr_sector->getPaginate();
        $recent = $this->csr_sector->getRecent();
        $slider = $this->csr_sector->getSlider();
        return view('information_csr_sector.index', compact(['csr_sector', 'recent', 'slider']));
    }

    public function show($slug)
    {
        $csr_sector = $this->csr_sector->getDetail($slug);
        $recent = $this->csr_sector->getRecent();
        return view('information_csr_sector.show', compact(['csr_sector', 'recent']));
    }

    public function getByCategory($slug)
    {
        $category = $this->category->getDetail($slug);
        $csr_sector = $this->csr_sector->getByCategory($category->id);

        return view('information_csr_sector.category', compact('category', 'csr_sector'));
    }
}
