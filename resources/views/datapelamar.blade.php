@extends('layouts.app')

@section('content')

<h1 class="text-center mb-4">DATA PELAMAR PEKERJAAN DI PT. EKA AKARJATI</h1>
<div class="container">
    <a href='/tambahpelamar/' class="btn btn-primary">Tambah +</a>
    <div class="row">
        @if ($message = Session::get('success'))
        <div class="alert alert-info" role="alert">
            {{$message}}
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No.HP</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($data as $row)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->nama_pelamar }}</td>
                    <td>{{ $row->jenis_kelamin }}</td>
                    <td>0{{ $row->no_telepon }}</td>
                    <td>{{ $row->created_at->format('D M Y')}}</td>
                    <td>
                        <a href='/tampildata/{{ $row-> id }}' class="btn btn-success">Edit</a>
                        <a href='/deletedata/{{ $row-> id }}' class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection