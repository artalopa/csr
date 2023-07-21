@extends('admin.layouts.general')

@section('title-content', 'LAPORAN TAHUNAN')

@section('link-address')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="">Dashboard</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Laporan Tahunan
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
                                <th style="width: 26%;">Tahun</th>
                                <th style="width: 26%;">Total Kegiatan</th>
                                <th style="width: 26%;">Total Anggaran</th>
                                <th style="width: 15%;" class="text-center">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($reportYears as $report)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $report->year }}</td>
                                        <td>{{ $report->activity }}</td>
                                        <td>Rp. {{ number_format($report->budget) }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('news.edit', $report->id) }}"
                                                    class="btn btn-success text-white me-3">Edit</a>
                                                <form action="{{ route('news.destroy', $report->id) }}" method="POST">
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
                        {{-- {{ $reportYears->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
