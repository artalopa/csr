<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\ProfileJepara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileJeparaController extends Controller
{
    protected $profileJepara;

    public function __construct(ProfileJepara $profileJepara)
    {
        $this->profileJepara = $profileJepara;
    }

    public function index()
    {
        $profileJepara = $this->profileJepara->getData();
        return view('admin.profile.jepara.index', compact('profileJepara'));
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
            $image_left->move(public_path('uploads/profileJepara'), $newImage_left);
        } else {
            $newImage_left = null;
        }

        if ($request->file('image_right')) {
            $image_right = $request->image_right;
            $newImage_right = time() . Str::random(30) . '.' . $image_right->getClientOriginalExtension();
            $image_right->move(public_path('uploads/profileJepara'), $newImage_right);
        } else {
            $newImage_right = null;
        }

        $data = [
            'description' => $request->description,
            'image_left' => $newImage_left,
            'image_right' => $newImage_right
        ];

        $this->profileJepara->createData($data);

        Alert::toast('Data berhasil disimpan', 'success');
        return back();
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image_left' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'image_right' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        ]);

        $profileJepara = $this->profileJepara->getDetail($id);

        if ($request->file('image_left')) {
            $image_left = $request->image_left;
            $newImage_left = time() . Str::random(30) . '.' . $image_left->getClientOriginalExtension();
            $image_left->move(public_path('uploads/profileJepara'), $newImage_left);
            File::delete(public_path('uploads/profileJepara/' . $profileJepara->image_left));
        } else {
            $newImage_left = $profileJepara->image_left;
        }

        if ($request->file('image_right')) {
            $image_right = $request->image_right;
            $newImage_right = time() . Str::random(30) . '.' . $image_right->getClientOriginalExtension();
            $image_right->move(public_path('uploads/profileJepara'), $newImage_right);
            File::delete(public_path('uploads/profileJepara/' . $profileJepara->image_right));
        } else {
            $newImage_right = $profileJepara->image_right;
        }

        $data = [
            'description' => $request->description,
            'image_left' => $newImage_left,
            'image_right' => $newImage_right,
        ];

        $profileJepara->update($data);

        Alert::toast('Data berhasil diupdate', 'success');
        return back();
    }
}
