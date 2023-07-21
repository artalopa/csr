@extends('admin.layouts.general')

@section('title-content', 'INFORMASI KONTAK')

@section('link-address')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="">Dashboard</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Informasi Kontak
        </li>
    </ol>
@endsection

@section('content')
    <form
        action="@if (!empty($info)) {{ route('information.update', $info->id) }} @else {{ route('information.store') }} @endif"
        method="POST" enctype="multipart/form-data">
        @csrf
        @if (!empty($info))
            @method('patch')
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Instansi</label>
                            <input type="text" class="form-control" name="situs"
                                placeholder="Tulis Nama Instansi Disini"
                                @if (!empty($info)) value="{{ $info->situs }}" @endif>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="description" class="form-control" placeholder="Tulis Deskripsi Singkat">
@if (!empty($info))
{{ $info->description }}
@endif
</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input name="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Tulis Email Disini"
                                @if (!empty($info)) value="{{ $info->email }}" @endif>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Telephone / HP</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                placeholder="Tulis Nomor Telephone / Hp"
                                @if (!empty($info)) value="{{ $info->phone }}" @endif>
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                                placeholder="Tulis Alamat"
                                @if (!empty($info)) value="{{ $info->address }}" @endif>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Google Map</label>
                            <textarea name="map" class="form-control" placeholder="Embed Google Map" style="height: 341px;">
@if (!empty($info))
{{ $info->map }}
@endif
</textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            @if (!empty($info))
                                <button type="submit" class="btn btn-success text-white">UPDATE</button>
                            @else
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
