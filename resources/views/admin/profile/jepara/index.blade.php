@extends('admin.layouts.general')

@section('title-content', 'PROFILE KABUPATEN JEPARA')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/quill/dist/quill.snow.css') }}">
@endsection

@section('link-address')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="">Dashboard</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Profile Jepara
        </li>
    </ol>
@endsection

@section('content')
    <form
        action="@if (!empty($profileJepara)) {{ route('profile-jepara.update', $profileJepara->id) }} @else {{ route('profile-jepara.store') }} @endif"
        method="POST" enctype="multipart/form-data">
        @csrf
        @if (!empty($profileJepara))
            @method('patch')
        @endif
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div id="editor" style="height: 300px;">
                            @if (!empty($profileJepara))
                                {!! $profileJepara->description !!}
                            @endif
                        </div>
                        <textarea hidden id="quill_html" name="description">
@if (!empty($profileJepara))
{{ $profileJepara->description }}
@endif
</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">
                                <div class="d-flex">
                                    <span class="me-3">Gambar Kiri</span>
                                    @if (!empty($profileJepara->image_left))
                                        <a href="{{ asset('uploads/profileJepara/' . $profileJepara->image_left) }}"
                                            target="_blank">lihat
                                            gambar</a>
                                    @endif
                                </div>
                            </label>
                            <input type="file" class="form-control" name="image_left">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                <div class="d-flex">
                                    <span class="me-3">Gambar Kanan</span>
                                    @if (!empty($profileJepara->image_right))
                                        <a href="{{ asset('uploads/profileJepara/' . $profileJepara->image_right) }}"
                                            target="_blank">lihat
                                            gambar</a>
                                    @endif
                                </div>
                            </label>
                            <input type="file" class="form-control" name="image_right">
                        </div>
                        <div class="d-flex justify-content-end">
                            @if (!empty($profileJepara))
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

@section('js')
    <script src="{{ asset('assets/admin/vendor/quill/dist/quill.min.js') }}"></script>

    <script>
        var quill = new Quill("#editor", {
            theme: "snow",
            placeholder: "Tulis Profile Jepara"
        });
        quill.on('text-change', function(delta, oldDelta, source) {
            document.getElementById("quill_html").value = quill.root.innerHTML;

            console.log(quill.root.innerHTML);
        });
    </script>
@endsection
