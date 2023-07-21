<?php

namespace App\Http\Controllers\Admin\Information;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class InformationController extends Controller
{
    protected $info;

    public function __construct(Information $info)
    {
        $this->info = $info;
    }

    public function index()
    {
        $info = $this->info->getData();
        return view('admin.information.index', compact('info'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'situs' => 'nullable|max:255',
            'email' => 'nullable|max:255',
            'phone' => 'nullable|max:15'
        ]);

        $data = [
            'situs' => $request->situs,
            'description' => $request->description,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'map' => $request->map
        ];

        $this->info->createData($data);

        Alert::toast('Data berhasil disimpan', 'success');
        return back();
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'situs' => 'nullable|max:255',
            'email' => 'nullable|max:255',
            'phone' => 'nullable|max:15'
        ]);

        $info = $this->info->getDetail($id);

        $data = [
            'situs' => $request->situs,
            'description' => $request->description,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'map' => $request->map
        ];

        $info->update($data);

        Alert::toast('Data berhasil diupdate', 'success');
        return back();
    }
}
