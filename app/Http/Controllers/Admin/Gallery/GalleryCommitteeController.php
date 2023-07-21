<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\GalleryCommittee;
use App\Models\GalleryCommitteeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryCommitteeController extends Controller
{
    protected $category;
    protected $gallery;

    public function __construct(GalleryCommitteeCategory $category, GalleryCommittee $gallery)
    {
        $this->category = $category;
        $this->gallery = $gallery;
    }

    public function index()
    {
        $gallery = $this->gallery->getPaginate();
        return view('admin.gallery_committee.index', compact('gallery'));
    }

    public function create()
    {
        $categories = $this->category->getAll();
        return view('admin.gallery_committee.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:gallery_committees,title,|string|max:255',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        $image = $request->image;
        $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/gallery'), $newImage);

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'gallery_committee_category_id' => $request->gallery_category_id,
            'description' => $request->description,
            'image' => $newImage,
            'location' => $request->location,
            'date' => $request->date
        ];

        $this->gallery->createData($data);

        Alert::toast('Data berhasil disimpan', 'success');
        return back();
    }

    public function edit($slug)
    {
        $gallery  = $this->gallery->getDetail($slug);
        $categories = $this->category->getAll();
        return view('admin.gallery_committee.edit', compact('gallery', 'categories'));
    }

    public function update(Request $request, $slug)
    {
        $gallery = $this->gallery->getDetail($slug);

        $this->validate($request, [
            'title' => 'required|string|max:255|unique:gallery_committees,title,' . $gallery->id,
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        if ($request->file('image')) {
            $image = $request->image;
            $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/gallery'), $newImage);
            File::delete(public_path('uploads/gallery/' . $gallery->image));
        } else {
            $newImage = $gallery->image;
        }

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'gallery_committee_category_id' => $request->gallery_category_id,
            'description' => $request->description,
            'image' => $newImage,
            'location' => $request->location,
            'date' => $request->date
        ];

        $gallery->update($data);

        Alert::toast('Data berhasil diupdate', 'success');
        return redirect()->route('gallery-committee.edit', $gallery->slug);
    }

    public function destroy($slug)
    {
        $gallery = $this->gallery->getDetail($slug);

        File::delete(public_path('uploads/gallery/' . $gallery->image));

        $gallery->delete();

        Alert::toast('Data berhasil dihapus', 'success');

        return back();
    }
}
