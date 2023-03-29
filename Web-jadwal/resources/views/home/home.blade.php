@extends('layouts.app')

@section('main')

@if (Session::get('success'))

<div class="container mt-3">
    <div class="alert alert-success alert-dismissible fade-show" role="alert">
        {{Session::get('success')}}
    </div>
</div>
@endif

@if (Session::get('failed'))
<div class="container mt-3">
    <div class="alert alert-success alert-dismissible fade-show" role="alert">
        {{Session::get('failed')}}
    </div>
</div>

@endif

<div class="container mt-5 table-responsive">
    <table class="table caption-top">
        <div class="d-flex justify-content-between mb-3">
            <h3>Daftar List</h3>
            <a href="{{route('create')}}" class="btn btn-primary">Tambah List</a>
        </div>
        <thead class="table-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Hari</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Kegiatan</th>
                <th scope="col">Edit / Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwal as $jadwal)
            <tr>
                <th scope="row">{{$I++}}</th>
                <td style="font-style: italic;">{{$jadwal->hari}}</td>
                <td style="font-style: italic;">{{$jadwal->tanggal}}</td>
                <td style="font-style: italic;">{{$jadwal->kegiatan}}</td>
                <td>
                    <div class="d-flex justify-content-between mb-3">
                        <form action="{{route('delete', $jadwal->id)}}" method="POST">
                            @csrf @method('DELETE')
                            <a href="{{ route('edit', $jadwal->id) }}" class="btn btn-primary"><i class="fa-solid fa-edit"></i></a>
                            <button type="submit" class="btn btn-danger " onclick="return confirm('Apakah anda ingin menghapus Data {{$jadwal->name}} ?')"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection