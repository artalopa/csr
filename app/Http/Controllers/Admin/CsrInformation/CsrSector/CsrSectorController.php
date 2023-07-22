<?php

namespace App\Http\Controllers\Admin\CsrInformation\CsrSector;

use App\Http\Controllers\Controller;
use App\Models\CsrSector;
use App\Models\CsrSectorCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CsrSectorController extends Controller
{
    protected $category;
    protected $csr_sector;

    public function __construct(CsrSectorCategory $category, CsrSector $csr_sector)
    {
        $this->category = $category;
        $this->csr_sector = $csr_sector;
    }

    public function index()
    {
        $csr_sector = $this->csr_sector->getPaginate();
        // dd($csr_sector->links());
        return view('admin.information_csr_sector.index', compact('csr_sector'));
    }

    public function create()
    {
        $categories = $this->category->getAll();
        return view('admin.information_csr_sector.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:csr_sectors,title,|string|max:255',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);

        $image = $request->image;
        $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/csr_sector'), $newImage);

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'csr_sector_category_id' => $request->csr_sector_category_id,
            'description' => $request->description,
            'image' => $newImage
        ];

        $this->csr_sector->createData($data);

        Alert::toast('Data berhasil disimpan', 'success');
        return back();
    }

    public function edit($slug)
    {
        $csr_sector  = $this->csr_sector->getDetail($slug);
        $categories = $this->category->getAll();
        return view('admin.information_csr_sector.edit', compact('csr_sector', 'categories'));
    }

    public function update(Request $request, $slug)
    {
        $csr_sector = $this->csr_sector->getDetail($slug);

        $this->validate($request, [
            'title' => 'required|string|max:255|unique:csr_sectors,title,' . $csr_sector->id,
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        if ($request->file('image')) {
            $image = $request->image;
            $newImage = time() . Str::random(30) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/csr_sector'), $newImage);
            File::delete(public_path('uploads/csr_sector/' . $csr_sector->image));
        } else {
            $newImage = $csr_sector->image;
        }

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'csr_sector_category_id' => $request->csr_sector_category_id,
            'description' => $request->description,
            'image' => $newImage
        ];

        $csr_sector->update($data);

        Alert::toast('Data berhasil diupdate', 'success');
        return redirect()->route('csr-sector.edit', $csr_sector->slug);
    }

    public function destroy($slug)
    {
        $csr_sector = $this->csr_sector->getDetail($slug);

        File::delete(public_path('uploads/csr_sector/' . $csr_sector->image));

        $csr_sector->delete();

        Alert::toast('Data berhasil dihapus', 'success');

        return back();
    }
}
