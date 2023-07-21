<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    protected $about;

    public function __construct(About $about)
    {
        $this->about = $about;
    }

    public function index()
    {
        $about = $this->about->getData();
        return view('admin.about.index', compact('about'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        if ($request->file('image')) {
            $image = $request->image;
            $newImage = time().Str::random(30).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/about'), $newImage);
        }else {
            $newImage = null;
        }

        $data = [
            'description' => $request->description,
            'image' => $newImage
        ];

        $this->about->createData($data);

        Alert::toast('Data berhasil disimpan', 'success');
        return back();
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        $about = $this->about->getDetail($id);

        if ($request->file('image')) {
            $image = $request->image;
            $newImage = time().Str::random(30).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/about'), $newImage);
            File::delete(public_path('uploads/about/'.$about->image));
        }else {
            $newImage = $about->image;
        }

        $data = [
            'description' => $request->description,
            'image' => $newImage
        ];

        $about->update($data);

        Alert::toast('Data berhasil diupdate', 'success');
        return back();
    }
}
