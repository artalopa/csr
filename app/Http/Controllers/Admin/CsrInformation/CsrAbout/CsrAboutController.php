<?php

namespace App\Http\Controllers\Admin\CsrInformation\CsrAbout;

use App\Http\Controllers\Controller;
use App\Models\CsrAbout;
use App\Models\CsrAboutCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CsrAboutController extends Controller
{
    protected $category;
    protected $csr_about;

    public function __construct(CsrAboutCategory $category, CsrAbout $csr_about)
    {
        $this->category = $category;
        $this->csr_about = $csr_about;
    }

    public function index()
    {
        $csr_about = $this->csr_about->getPaginate();
        // dd($csr_about->links());
        return view('admin.information_csr_about.index', compact('csr_about'));
    }

    public function create()
    {
        $categories = $this->category->getAll();
        return view('admin.information_csr_about.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:csr_abouts,title,|string|max:255',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);

        $image = $request->image;
        $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/csr_about'), $newImage);

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'csr_about_category_id' => $request->csr_about_category_id,
            'description' => $request->description,
            'image' => $newImage
        ];

        $this->csr_about->createData($data);

        Alert::toast('Data berhasil disimpan', 'success');
        return back();
    }

    public function edit($slug)
    {
        $csr_about  = $this->csr_about->getDetail($slug);
        $categories = $this->category->getAll();
        return view('admin.information_csr_about.edit', compact('csr_about', 'categories'));
    }

    public function update(Request $request, $slug)
    {
        $csr_about = $this->csr_about->getDetail($slug);

        $this->validate($request, [
            'title' => 'required|string|max:255|unique:csr_abouts,title,' . $csr_about->id,
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        if ($request->file('image')) {
            $image = $request->image;
            $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/csr_about'), $newImage);
            File::delete(public_path('uploads/csr_about/' . $csr_about->image));
        } else {
            $newImage = $csr_about->image;
        }

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'csr_about_category_id' => $request->csr_about_category_id,
            'description' => $request->description,
            'image' => $newImage
        ];

        $csr_about->update($data);

        Alert::toast('Data berhasil diupdate', 'success');
        return redirect()->route('csr-about.edit', $csr_about->slug);
    }

    public function destroy($slug)
    {
        $csr_about = $this->csr_about->getDetail($slug);

        File::delete(public_path('uploads/csr_about/' . $csr_about->image));

        $csr_about->delete();

        Alert::toast('Data berhasil dihapus', 'success');

        return back();
    }
}
