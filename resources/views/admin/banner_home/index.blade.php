@extends('admin.layouts.general')

@section('title-content', 'BANNER HALAMAN HOME')

@section('link-address')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="">Dashboard</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Banner Halaman Home
        </li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-body">
                <form action="@if(!empty($banner)) {{ route('banner-home.update', $banner->id) }} @else {{ route('banner-home.store') }} @endif" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (!empty($banner))
                        @method('patch')
                    @endif
                    <div class="mb-3">
                        <label class="form-label">Banner Home Kanan</label>
                        <input type="file" name="banner_right" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Banner Home Kiri</label>
                        <input type="file" name="banner_left" class="form-control">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if (!empty($banner))
        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('uploads/banner_home/'.$banner->banner_right) }}" alt="Kosong" class="w-100" height="195">
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('uploads/banner_home/'.$banner->banner_left) }}" alt="Kosong" class="w-100" height="195">
                </div>
            </div>
        </div>
    @endif
</div>
@endsection
