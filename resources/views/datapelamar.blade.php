<<<<<<< HEAD
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
=======
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOWONGAN PEKERJAAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mb-4">DATA PELAMAR PEKERJAAN DI PT. EKA AKARJATI</h1>
    <div class="container">
        <a href='/tambahpelamar/' class="btn btn-primary">Tambah +</a>
        <div class="row">
            @if ($message = Session::get('success'));
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </div>
    </div>
</body>

</html>
>>>>>>> b0ad48fb166cceac24b5e2975f61ee26ca08325b
