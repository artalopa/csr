@extends('admin.layouts.general')

@section('title-content', 'GALERI KEGIATAN CSR')

@section('link-address')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="">Dashboard</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Kegiatan CSR
        </li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive mb-3">
                        <table class="table table-striped">
                            <thead>
                                <th style="width: 5%;">No</th>
                                <th style="width: 60%;">Judul Kegiatan CSR</th>
                                <th style="width: 20%;">Kategori Kegiatan CSR</th>
                                <th style="width: 15%;" class="text-center">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($gallery as $result => $key)
                                    <tr>
                                        <td>{{ $result + $gallery->firstitem() }}</td>
                                        <td>{{ $key->title }}</td>
                                        <td>{{ $key->GalleryCsrCategory->name ?? 'Uncategorized' }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('gallery-csr.edit', $key->slug) }}"
                                                    class="btn btn-success text-white me-3">Edit</a>
                                                <form action="{{ route('gallery-csr.destroy', $key->slug) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $gallery->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
