<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\ProfileRegulasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileRegulasiController extends Controller
{
    protected $profileRegulasi;

    public function __construct(ProfileRegulasi $profileRegulasi)
    {
        $this->profileRegulasi = $profileRegulasi;
    }

    public function index()
    {
        $profileRegulasi = $this->profileRegulasi->getData();
        return view('admin.profile.regulasi.index', compact('profileRegulasi'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image_left' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'image_right' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        ]);

        if ($request->file('image_left')) {
            $image_left = $request->image_left;
            $newImage_left = time() . Str::random(30) . '.' . $image_left->getClientOriginalExtension();
            $image_left->move(public_path('uploads/profileRegulasi'), $newImage_left);
        } else {
            $newImage_left = null;
        }

        if ($request->file('image_right')) {
            $image_right = $request->image_right;
            $newImage_right = time() . Str::random(30) . '.' . $image_right->getClientOriginalExtension();
            $image_right->move(public_path('uploads/profileRegulasi'), $newImage_right);
        } else {
            $newImage_right = null;
        }

        $data = [
            'description' => $request->description,
            'image_left' => $newImage_left,
            'image_right' => $newImage_right
        ];

        $this->profileRegulasi->createData($data);

        Alert::toast('Data berhasil disimpan', 'success');
        return back();
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image_left' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'image_right' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        ]);

        $profileRegulasi = $this->profileRegulasi->getDetail($id);

        if ($request->file('image_left')) {
            $image_left = $request->image_left;
            $newImage_left = time() . Str::random(30) . '.' . $image_left->getClientOriginalExtension();
            $image_left->move(public_path('uploads/profileRegulasi'), $newImage_left);
            File::delete(public_path('uploads/profileRegulasi/' . $profileRegulasi->image_left));
        } else {
            $newImage_left = $profileRegulasi->image_left;
        }

        if ($request->file('image_right')) {
            $image_right = $request->image_right;
            $newImage_right = time() . Str::random(30) . '.' . $image_right->getClientOriginalExtension();
            $image_right->move(public_path('uploads/profileRegulasi'), $newImage_right);
            File::delete(public_path('uploads/profileRegulasi/' . $profileRegulasi->image_right));
        } else {
            $newImage_right = $profileRegulasi->image_right;
        }

        $data = [
            'description' => $request->description,
            'image_left' => $newImage_left,
            'image_right' => $newImage_right,
        ];

        $profileRegulasi->update($data);

        Alert::toast('Data berhasil diupdate', 'success');
        return back();
    }
}
