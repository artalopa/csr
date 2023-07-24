@extends('admin.layouts.general')

@section('title-content', 'TAMBAH KEGIATAN CSR')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/quill/dist/quill.snow.css') }}">
@endsection

@section('link-address')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="">Dashboard</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">
            <a href="{{ route('gallery-csr.index') }}">Kegiatan Kegiatan CSR</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Tambah Kegiatan CSR
        </li>
    </ol>
@endsection

@section('content')
    <form action="{{ route('gallery-csr.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Judul Kegiatan <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                placeholder="Tulis Judul Kegiatan" required>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <div id="editor" style="height: 300px;"></div>
                            <textarea hidden id="quill_html" name="description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Kategori Kegiatan <span class="text-danger">*</span></label>
                            <select name="gallery_category_id" class="form-select" required>
                                <option value="" disabled selected>Pilih Kategori Kegiatan</option>
                                @foreach ($categories as $result)
                                    <option value="{{ $result->id }}">{{ $result->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Program Kegiatan <span class="text-danger">*</span></label>
                            <select name="gallery_category_id" class="form-select" required>
                                <option value="" disabled selected>Pilih Program Kegiatan</option>
                                @foreach ($categories as $result)
                                    <option value="{{ $result->id }}">{{ $result->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                accept="image/*">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <input type="text" name="location" class="form-control" placeholder="Tulis Lokasi Kegiatan"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal pelaksanaan</label>
                            <input type="date" name="date" class="form-control" required>
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
            placeholder: "Tulis Deskripsi Kegiatan Disini"
        });
        quill.on('text-change', function(delta, oldDelta, source) {
            document.getElementById("quill_html").value = quill.root.innerHTML;

            console.log(quill.root.innerHTML);
        });
    </script>
@endsection
