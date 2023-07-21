<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Models\BannerHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class BannerHomeController extends Controller
{
    protected $bannerHome;
    public function __construct(BannerHome $bannerHome)
    {
        $this->bannerHome = $bannerHome;
    }

    public function index()
    {
        $banner = $this->bannerHome->getData();
        return view('admin.banner_home.index', compact('banner'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'banner_right' => 'nullable|mimes:png,jpg,jpeg',
            'banner_left' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        if ($request->file('banner_right')) {
            $right = $request->banner_right;
            $newRight = time().Str::random(30).'.'.$right->getClientOriginalExtension();
            $right->move(public_path('uploads/banner_home'), $newRight);
        } else {
            $newRight = null;
        }

        if ($request->file('banner_left')) {
            $left = $request->banner_left;
            $newLeft = time().Str::random(30).'.'.$left->getClientOriginalExtension();
            $left->move(public_path('uploads/banner_home'), $newLeft);
        } else {
            $newLeft = null;
        }

        $data = [
            'banner_right' => $newRight,
            'banner_left' => $newLeft
        ];

        $this->bannerHome->createData($data);

        Alert::toast('Data berhasil disimpan', 'success');
        return back();
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'banner_right' => 'nullable|mimes:png,jpg,jpeg',
            'banner-left' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        $banner = $this->bannerHome->getDetail($id);

        if ($request->file('banner_right')) {
            $right = $request->banner_right;
            $newRight = time().Str::random(30).'.'.$right->getClientOriginalExtension();
            $right->move(public_path('uploads/banner_home'), $newRight);
            File::delete(public_path('uploads/banner_home/'.$banner->banner_right));
        } else {
            $newRight = $banner->banner_right;
        }

        if ($request->file('banner_left')) {
            $left = $request->banner_left;
            $newLeft = time().Str::random(30).'.'.$left->getClientOriginalExtension();
            $left->move(public_path('uploads/banner_home'), $newLeft);
            File::delete(public_path('uploads/banner_home/'.$banner->banner_left));
        } else {
            $newLeft = $banner->banner_left;
        }

        $data = [
            'banner_right' => $newRight,
            'banner_left' => $newLeft
        ];

        $banner->update($data);

        Alert::toast('Data berhasil disimpan', 'success');
        return back();
    }
}
