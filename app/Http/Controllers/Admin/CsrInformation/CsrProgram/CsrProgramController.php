<?php

namespace App\Http\Controllers\Admin\CsrInformation\CsrProgram;

use App\Http\Controllers\Controller;
use App\Models\CsrProgram;
use App\Models\CsrProgramCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CsrProgramController extends Controller
{
    protected $category;
    protected $csr_program;

    public function __construct(CsrProgramCategory $category, CsrProgram $csr_program)
    {
        $this->category = $category;
        $this->csr_program = $csr_program;
    }

    public function index()
    {
        $csr_program = $this->csr_program->getPaginate();
        // dd($csr_program->links());
        return view('admin.information_csr_program.index', compact('csr_program'));
    }

    public function create()
    {
        $categories = $this->category->getAll();
        return view('admin.information_csr_program.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:csr_programs,title,|string|max:255',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);

        $image = $request->image;
        $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/csr_program'), $newImage);

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'csr_program_category_id' => $request->csr_program_category_id,
            'description' => $request->description,
            'image' => $newImage
        ];

        $this->csr_program->createData($data);

        Alert::toast('Data berhasil disimpan', 'success');
        return back();
    }

    public function edit($slug)
    {
        $csr_program  = $this->csr_program->getDetail($slug);
        $categories = $this->category->getAll();
        return view('admin.information_csr_program.edit', compact('csr_program', 'categories'));
    }

    public function update(Request $request, $slug)
    {
        $csr_program = $this->csr_program->getDetail($slug);

        $this->validate($request, [
            'title' => 'required|string|max:255|unique:csr_programs,title,' . $csr_program->id,
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        if ($request->file('image')) {
            $image = $request->image;
            $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/csr_program'), $newImage);
            File::delete(public_path('uploads/csr_program/' . $csr_program->image));
        } else {
            $newImage = $csr_program->image;
        }

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'csr_program_category_id' => $request->csr_program_category_id,
            'description' => $request->description,
            'image' => $newImage
        ];

        $csr_program->update($data);

        Alert::toast('Data berhasil diupdate', 'success');
        return redirect()->route('csr-program.edit', $csr_program->slug);
    }

    public function destroy($slug)
    {
        $csr_program = $this->csr_program->getDetail($slug);

        File::delete(public_path('uploads/csr_program/' . $csr_program->image));

        $csr_program->delete();

        Alert::toast('Data berhasil dihapus', 'success');

        return back();
    }
}
