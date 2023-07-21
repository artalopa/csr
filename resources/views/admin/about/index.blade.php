@extends('admin.layouts.general')

@section('title-content', 'TENTANG KAMI')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/admin/vendor/quill/dist/quill.snow.css') }}">
@endsection

@section('link-address')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="">Dashboard</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Tentang Kami
        </li>
    </ol>
@endsection

@section('content')
<form action="@if(!empty($about)) {{ route('about.update', $about->id) }} @else {{ route('about.store') }} @endif" method="POST" enctype="multipart/form-data">
    @csrf
    @if (!empty($about))
        @method('patch')
    @endif
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div id="editor" style="height: 300px;">@if(!empty($about)){!! $about->description !!}@endif</div>
                    <textarea hidden id="quill_html" name="description">@if(!empty($about)){{ $about->description }}@endif</textarea>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">
                            <div class="d-flex">
                                <span class="me-3">Gambar</span>
                                @if (!empty($about))
                                    <a href="{{ asset('uploads/about/'.$about->image) }}" target="_blank">lihat gambar</a>
                                @endif
                            </div>
                        </label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="d-flex justify-content-end">
                        @if (!empty($about))
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
        placeholder: "Tulis Tentang Usaha / Perusahaan"
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.getElementById("quill_html").value = quill.root.innerHTML;

        console.log(quill.root.innerHTML);
    });
</script>
@endsection
