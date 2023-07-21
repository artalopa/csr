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
                                <th style="width: 60%;">Nama</th>
                                <th style="width: 20%;">Jabatan</th>
                                <th style="width: 15%;" class="text-center">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($komiteTsp as $result => $key)
                                    <tr>
                                        <td>{{ $result + $komiteTsp->firstitem() }}</td>
                                        <td>{{ $key->name }}</td>
                                        <td>{{ $key->position }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('komite-tsp.edit', $key->id) }}"
                                                    class="btn btn-success text-white me-3">Edit</a>
                                                <form action="{{ route('komite-tsp.destroy', $key->id) }}" method="POST">
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
                        {{ $komiteTsp->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
