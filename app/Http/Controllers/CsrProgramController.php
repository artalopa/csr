<?php

namespace App\Http\Controllers;

use App\Models\CsrProgram;
use App\Models\CsrProgramCategory;
use Illuminate\Http\Request;

class CsrProgramController extends Controller
{
    protected $csr_program;
    protected $category;

    public function __construct(CsrProgram $csr_program, CsrProgramCategory $category)
    {
        $this->csr_program = $csr_program;
        $this->category = $category;
    }

    public function index()
    {
        $csr_program = $this->csr_program->getPaginate();
        $recent = $this->csr_program->getRecent();
        $slider = $this->csr_program->getSlider();
        return view('information_csr_program.index', compact(['csr_program', 'recent', 'slider']));
    }

    public function show($slug)
    {
        $csr_program = $this->csr_program->getDetail($slug);
        $recent = $this->csr_program->getRecent();
        return view('information_csr_program.show', compact(['csr_program', 'recent']));
    }

    public function getByCategory($slug)
    {
        $category = $this->category->getDetail($slug);
        $csr_program = $this->csr_program->getByCategory($category->id);

        return view('information_csr_program.category', compact('category', 'csr_program'));
    }
}
