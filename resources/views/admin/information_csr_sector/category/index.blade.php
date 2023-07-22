@extends('admin.layouts.general')

@section('title-content', 'KATEGORI SEKTOR')

@section('link-address')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="">Dashboard</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">
            <a href="{{ route('csr-sector.index') }}">Sektor</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Kategori
        </li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>TAMBAH KATEGORI</h5>
                    <form action="{{ route('csr-sector-category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Tulis Nama Kategori" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <textarea class="form-control" name="description" placeholder="Tulis Keterangan" style="height: 120px;"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" name="image" class="form-control  @error('image') is-invalid @enderror"
                                accept="image/*">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success text-white">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5>DAFTAR KATEGORI</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th style="width: 5%;">No</th>
                                <th style="width:20%;">Nama Kategori</th>
                                <th style="width: 40%;">Deskripsi</th>
                                <th style="width: 20%;" class="text-center">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($categories as $result => $key)
                                    <tr>
                                        <td>{{ $result + $categories->firstitem() }}</td>
                                        <td>{{ $key->name }}</td>
                                        <td>
                                            @if (strlen($key->description > 80))
                                                {{ substr($key->description, 0, 75) }} ...
                                            @else
                                                {{ $key->description }}
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="javascript:void(0)" class="btn btn-success text-white me-2"
                                                    data-bs-toggle="modal" data-bs-target="#{{ $key->slug }}">Edit</a>
                                                <form action="{{ route('csr-sector-category.destroy', $key->slug) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="{{ $key->slug }}" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">EDIT KATEGORI</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('csr-sector-category.update', $key->slug) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('patch')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nama Kategori</label>
                                                            <input type="text" name="name" class="form-control"
                                                                placeholder="Tulis Nama Kategori"
                                                                value="{{ $key->name }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Keterangan</label>
                                                            <textarea class="form-control" name="description" placeholder="Tulis Keterangan" style="height: 120px;">{{ $key->description }}</textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">
                                                                <div class="d-flex">
                                                                    <div class="me-3">
                                                                        <span>Gambar (Optional)</span>
                                                                    </div>
                                                                    @if ($key->image !== null)
                                                                        <div>
                                                                            <a href="{{ asset('uploads/category/' . $key->image) }}"
                                                                                target="_blank">lihat gambar</a>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </label>
                                                            <input type="file" name="image" class="form-control"
                                                                accept="image/*">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit"
                                                            class="btn btn-success text-white">UPDATE</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
