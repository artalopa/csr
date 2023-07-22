<?php

namespace App\Http\Controllers\Admin\CsrInformation\Simoncer;

use App\Http\Controllers\Controller;
use App\Models\Simoncer;
use App\Models\SimoncerCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class SimoncerController extends Controller
{
    protected $category;
    protected $simoncer;

    public function __construct(SimoncerCategory $category, Simoncer $simoncer)
    {
        $this->category = $category;
        $this->simoncer = $simoncer;
    }

    public function index()
    {
        $simoncer = $this->simoncer->getPaginate();
        // dd($simoncer->links());
        return view('admin.information_simoncer.index', compact('simoncer'));
    }

    public function create()
    {
        $categories = $this->category->getAll();
        return view('admin.information_simoncer.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:simoncers,title,|string|max:255',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);

        $image = $request->image;
        $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/simoncer'), $newImage);

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'simoncer_category_id' => $request->simoncer_category_id,
            'description' => $request->description,
            'image' => $newImage
        ];

        $this->simoncer->createData($data);

        Alert::toast('Data berhasil disimpan', 'success');
        return back();
    }

    public function edit($slug)
    {
        $simoncer  = $this->simoncer->getDetail($slug);
        $categories = $this->category->getAll();
        return view('admin.information_simoncer.edit', compact('simoncer', 'categories'));
    }

    public function update(Request $request, $slug)
    {
        $simoncer = $this->simoncer->getDetail($slug);

        $this->validate($request, [
            'title' => 'required|string|max:255|unique:simoncers,title,' . $simoncer->id,
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        if ($request->file('image')) {
            $image = $request->image;
            $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/simoncer'), $newImage);
            File::delete(public_path('uploads/simoncer/' . $simoncer->image));
        } else {
            $newImage = $simoncer->image;
        }

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'simoncer_category_id' => $request->simoncer_category_id,
            'description' => $request->description,
            'image' => $newImage
        ];

        $simoncer->update($data);

        Alert::toast('Data berhasil diupdate', 'success');
        return redirect()->route('simoncer.edit', $simoncer->slug);
    }

    public function destroy($slug)
    {
        $simoncer = $this->simoncer->getDetail($slug);

        File::delete(public_path('uploads/simoncer/' . $simoncer->image));

        $simoncer->delete();

        Alert::toast('Data berhasil dihapus', 'success');

        return back();
    }
}
