@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('update', $jadwal->id) }}" method="POST">
                @csrf @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label">Hari</label>
                    <input type="text" name="hari" value="{{ old('hari' ,$jadwal->hari) }}" class="form-control">
                    @error('hari')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" onchange="invoicedue(event);" required value="{{ old('tanggal' ,$jadwal->tanggal) }}" class="form-control">
                    @error('tanggal')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kegiatan</label>
                    <textarea class="form-control" name="kegiatan" id="" rows="3">{{ old('kegiatan' , $jadwal->kegiatan) }}</textarea>
                    @error('kegiatan')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit data</button>
            </form>
        </div>
    </div>
</div>

@endsection