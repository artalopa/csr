@extends('admin.layouts.general')

@section('title-content', 'BERITA')

@section('link-address')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="">Dashboard</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Berita
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
                                <th style="width: 60%;">Judul Berita</th>
                                <th style="width: 20%;">Kategori Berita</th>
                                <th style="width: 15%;" class="text-center">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($simoncer as $result => $key)
                                    <tr>
                                        <td>{{ $result + $simoncer->firstitem() }}</td>
                                        <td>{{ $key->title }}</td>
                                        <td>{{ $key->SimoncerCategory->name ?? 'Uncategorized' }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('simoncer.edit', $key->slug) }}"
                                                    class="btn btn-success text-white me-3">Edit</a>
                                                <form action="{{ route('simoncer.destroy', $key->slug) }}" method="POST">
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
                        {{ $simoncer->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
