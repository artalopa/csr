@extends('admin.layouts.general')

@section('title-content', 'EDIT GALERI')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/quill/dist/quill.snow.css') }}">
@endsection

@section('link-address')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="">Dashboard</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">
            <a href="{{ route('gallery-committee.index') }}">Galeri</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            {{ Str::limit($gallery->title, 5) }}
        </li>
    </ol>
@endsection

@section('content')
    <form action="{{ route('gallery-committee.update', $gallery->slug) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="row">
            <div class="col-md-8 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Judul Galeri <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                placeholder="Tulis Judul Galeri" value="{{ $gallery->title }}" required>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <div id="editor" style="height: 300px;">{!! $gallery->description !!}</div>
                            <textarea hidden id="quill_html" name="description">{{ $gallery->description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Kategori Galeri <span class="text-danger">*</span></label>
                            <select name="gallery_category_id" class="form-select">
                                <option value="" disabled selected>Pilih Kategori Galeri</option>
                                @foreach ($categories as $result)
                                    <option value="{{ $result->id }}" @if ($result->id == $gallery->gallery_committee_category_id) selected @endif>
                                        {{ $result->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                <div class="d-flex">
                                    <span class="me-3">Gambar</span>
                                    <a href="{{ asset('uploads/gallery/' . $gallery->image) }}" target="_blank"
                                        class="float-right">lihat gambar</a>
                                </div>
                            </label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                accept="image/*">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <input type="text" name="location" class="form-control" placeholder="Tulis Lokasi Galeri"
                                value="{{ $gallery->location }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal pelaksanaan</label>
                            <input type="date" name="date" class="form-control" value="{{ $gallery->date }}"
                                required>
                        </div>
                        <div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-success text-white">UPDATE</button>
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
            placeholder: "Tulis Deskripsi Galeri Disini"
        });
        quill.on('text-change', function(delta, oldDelta, source) {
            document.getElementById("quill_html").value = quill.root.innerHTML;

            console.log(quill.root.innerHTML);
        });
    </script>
@endsection
