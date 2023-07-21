<?php

namespace App\Http\Controllers\Admin\KomiteTsp;

use App\Http\Controllers\Controller;
use App\Models\KomiteTsp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class KomiteTspController extends Controller
{
    protected $komiteTsp;

    public function __construct(KomiteTsp $komiteTsp)
    {
        $this->komiteTsp = $komiteTsp;
    }

    public function index()
    {
        $komiteTsp = $this->komiteTsp->getData();
        return view('admin.komite_tsp.index', compact('komiteTsp'));
    }

    public function create()
    {
        return view('admin.komite_tsp.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048'
        ]);

        if ($request->file('image')) {
            $image = $request->image;
            $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/komiteTsp'), $newImage);
        } else {
            $newImage = null;
        }

        $data = [
            'name' => $request->name,
            'position' => $request->position,
            'quotes' => $request->quotes,
            'image' => $newImage
        ];

        $this->komiteTsp->createData($data);

        Alert::toast('Data berhasil disimpan', 'success');
        return back();
    }

    public function edit($slug)
    {
        $komiteTsp  = $this->komiteTsp->getDetail($slug);
        return view('admin.komite_tsp.edit', compact('komiteTsp'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048'
        ]);

        $komiteTsp = $this->komiteTsp->getDetail($id);

        if ($request->file('image')) {
            $image = $request->image;
            $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/komiteTsp'), $newImage);
            File::delete(public_path('uploads/komiteTsp/' . $komiteTsp->image));
        } else {
            $newImage = $komiteTsp->image;
        }

        $data = [
            'name' => $request->name,
            'position' => $request->position,
            'quotes' => $request->quotes,
            'image' => $newImage
        ];

        $komiteTsp->update($data);

        Alert::toast('Data berhasil diupdate', 'success');
        return back();
    }

    public function destroy($slug)
    {
        $komiteTsp = $this->komiteTsp->getDetail($slug);

        File::delete(public_path('uploads/komiteTsp/' . $komiteTsp->image));

        $komiteTsp->delete();

        Alert::toast('Data berhasil dihapus', 'success');

        return back();
    }
}
