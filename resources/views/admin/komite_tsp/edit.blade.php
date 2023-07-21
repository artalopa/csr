@extends('admin.layouts.general')

@section('title-content', 'EDIT KOMITE TSP')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/quill/dist/quill.snow.css') }}">
@endsection

@section('link-address')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="">Dashboard</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">
            <a href="{{ route('komite-tsp.index') }}">Komite Tsp</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            {{ Str::limit($komiteTsp->name, 5) }}
        </li>
    </ol>
@endsection

@section('content')
    <form action="{{ route('komite-tsp.update', $komiteTsp->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="Nama lengkap" value="{{ $komiteTsp->name }}" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <input type="text" class="form-control" name="position" placeholder="Jabatan saat ini"
                                value="{{ $komiteTsp->position }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Quotes</label>
                            <input type="text" class="form-control" name="quotes" placeholder="Quotes"
                                value="{{ $komiteTsp->quotes }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                <div class="d-flex">
                                    <span class="me-3">Foto</span>
                                    <a href="{{ asset('uploads/komiteTsp/' . $komiteTsp->image) }}" target="_blank"
                                        class="float-right">lihat gambar</a>
                                </div>
                            </label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                accept="image/*">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

@section('js')
    <script src="{{ asset('assets/admin/vendor/quill/dist/quill.min.js') }}"></script>

    <script>
        var quill = new Quill("#editor", {
            theme: "snow",
            placeholder: "Tulis Deskripsi Berita Disini"
        });
        quill.on('text-change', function(delta, oldDelta, source) {
            document.getElementById("quill_html").value = quill.root.innerHTML;

            console.log(quill.root.innerHTML);
        });
    </script>
@endsection
