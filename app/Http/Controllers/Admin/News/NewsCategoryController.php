<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class NewsCategoryController extends Controller
{
    protected $category;

    public function __construct(NewsCategory $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->getPaginate();
        return view('admin.news.category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:news_categories,name,',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'description' => 'nullable'
        ]);

        if ($request->file('image')) {
            $image = $request->image;
            $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/category'), $newImage);
        } else {
            $newImage = null;
        }

        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'image' => $newImage
        ];
        $this->category->createData($data);

        Alert::toast('Data berhasil disimpan', 'success');
        return back();
    }

    public function update(Request $request, $slug)
    {
        $category = $this->category->getDetail($slug);

        $this->validate($request, [
            'name' => 'required|string|max:255|unique:news_categories,name,' . $category->id,
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'description' => 'nullable'
        ]);

        if ($request->file('image')) {
            $image = $request->image;
            $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/category'), $newImage);
            File::delete(public_path('uploads/category/' . $category->image));
        } else {
            $newImage = $category->image;
        }

        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'image' => $newImage
        ];

        $this->category->updateData($data, $slug);

        Alert::toast('Data berhasil diupdate', 'success');
        return back();
    }

    public function destroy($slug)
    {
        $category = $this->category->getDetail($slug);
        File::delete(public_path('uploads/category/' . $category->image));

        $this->category->deleteData($slug);
        Alert::toast('Data berhasil dihapus', 'success');
        return back();
    }
}
