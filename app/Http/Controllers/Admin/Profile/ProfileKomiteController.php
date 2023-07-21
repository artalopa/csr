<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\ProfileKomite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileKomiteController extends Controller
{
    protected $profileKomite;

    public function __construct(ProfileKomite $profileKomite)
    {
        $this->profileKomite = $profileKomite;
    }

    public function index()
    {
        $profileKomite = $this->profileKomite->getData();
        return view('admin.profile.komite.index', compact('profileKomite'));
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
            $image_left->move(public_path('uploads/profileKomite'), $newImage_left);
        } else {
            $newImage_left = null;
        }

        if ($request->file('image_right')) {
            $image_right = $request->image_right;
            $newImage_right = time() . Str::random(30) . '.' . $image_right->getClientOriginalExtension();
            $image_right->move(public_path('uploads/profileKomite'), $newImage_right);
        } else {
            $newImage_right = null;
        }

        $data = [
            'description' => $request->description,
            'image_left' => $newImage_left,
            'image_right' => $newImage_right
        ];

        $this->profileKomite->createData($data);

        Alert::toast('Data berhasil disimpan', 'success');
        return back();
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image_left' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'image_right' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        ]);

        $profileKomite = $this->profileKomite->getDetail($id);

        if ($request->file('image_left')) {
            $image_left = $request->image_left;
            $newImage_left = time() . Str::random(30) . '.' . $image_left->getClientOriginalExtension();
            $image_left->move(public_path('uploads/profileKomite'), $newImage_left);
            File::delete(public_path('uploads/profileKomite/' . $profileKomite->image_left));
        } else {
            $newImage_left = $profileKomite->image_left;
        }

        if ($request->file('image_right')) {
            $image_right = $request->image_right;
            $newImage_right = time() . Str::random(30) . '.' . $image_right->getClientOriginalExtension();
            $image_right->move(public_path('uploads/profileKomite'), $newImage_right);
            File::delete(public_path('uploads/profileKomite/' . $profileKomite->image_right));
        } else {
            $newImage_right = $profileKomite->image_right;
        }

        $data = [
            'description' => $request->description,
            'image_left' => $newImage_left,
            'image_right' => $newImage_right,
        ];

        $profileKomite->update($data);

        Alert::toast('Data berhasil diupdate', 'success');
        return back();
    }
}
