<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    protected $category;
    protected $news;

    public function __construct(NewsCategory $category, News $news)
    {
        $this->category = $category;
        $this->news = $news;
    }

    public function index()
    {
        $news = $this->news->getPaginate();
        // dd($news->links());
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        $categories = $this->category->getAll();
        return view('admin.news.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:news,title,|string|max:255',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);

        $image = $request->image;
        $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/news'), $newImage);

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'news_category_id' => $request->news_category_id,
            'description' => $request->description,
            'image' => $newImage
        ];

        $this->news->createData($data);

        Alert::toast('Data berhasil disimpan', 'success');
        return back();
    }

    public function edit($slug)
    {
        $news  = $this->news->getDetail($slug);
        $categories = $this->category->getAll();
        return view('admin.news.edit', compact('news', 'categories'));
    }

    public function update(Request $request, $slug)
    {
        $news = $this->news->getDetail($slug);

        $this->validate($request, [
            'title' => 'required|string|max:255|unique:news,title,' . $news->id,
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        if ($request->file('image')) {
            $image = $request->image;
            $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/news'), $newImage);
            File::delete(public_path('uploads/news/' . $news->image));
        } else {
            $newImage = $news->image;
        }

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'news_category_id' => $request->news_category_id,
            'description' => $request->description,
            'image' => $newImage
        ];

        $news->update($data);

        Alert::toast('Data berhasil diupdate', 'success');
        return redirect()->route('news.edit', $news->slug);
    }

    public function destroy($slug)
    {
        $news = $this->news->getDetail($slug);

        File::delete(public_path('uploads/news/' . $news->image));

        $news->delete();

        Alert::toast('Data berhasil dihapus', 'success');

        return back();
    }
}
