@extends('admin.layouts.general')

@section('title-content', 'EDIT BERITA')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/quill/dist/quill.snow.css') }}">
@endsection

@section('link-address')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="">Dashboard</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">
            <a href="{{ route('news.index') }}">Berita</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            {{ Str::limit($news->title, 5) }}
        </li>
    </ol>
@endsection

@section('content')
    <form action="{{ route('news.update', $news->slug) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="row">
            <div class="col-md-8 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Judul Berita <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                placeholder="Tulis Judul Berita" value="{{ $news->title }}" required>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <div id="editor" style="height: 300px;">{!! $news->description !!}</div>
                            <textarea hidden id="quill_html" name="description">{{ $news->description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Kategori Berita <span class="text-danger">*</span></label>
                            <select name="news_category_id" class="form-select">
                                <option value="" disabled selected>Pilih Kategori Berita</option>
                                @foreach ($categories as $result)
                                    <option value="{{ $result->id }}" @if ($result->id == $news->news_category_id) selected @endif>
                                        {{ $result->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                <div class="d-flex">
                                    <span class="me-3">Gambar</span>
                                    <a href="{{ asset('uploads/news/' . $news->image) }}" target="_blank"
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
            placeholder: "Tulis Deskripsi Berita Disini"
        });
        quill.on('text-change', function(delta, oldDelta, source) {
            document.getElementById("quill_html").value = quill.root.innerHTML;

            console.log(quill.root.innerHTML);
        });
    </script>
@endsection
