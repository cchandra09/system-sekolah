@extends('templates.app')
@section('title')
    Admin - Data Guru
@endsection
@section('heading')
    Data Guru
@endsection
@section('heading', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <table id="example1" class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Mapel</th>
                        <th>Lihat Guru</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->course_name }}</td>
                            {{-- <td>
                                <a href="{{ route('guru.mapel', Crypt::encrypt($data->id)) }}" class="btn btn-info btn-sm"><i class="nav-icon fas fa-search-plus"></i> &nbsp; Ditails</a>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
@endsection