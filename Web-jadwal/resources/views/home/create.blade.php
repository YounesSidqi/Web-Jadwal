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
            <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Hari</label>
                    <input name="hari" value="{{ old('hari') }}" type="text" class="form-control">
                    @error('hari')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Tanggal</label>
                    <input name="tanggal" value="{{ old('tanggal') }}" type="date" class="form-control">
                    @error('tanggal')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Kegiatan</label>
                    <textarea name="kegiatan" value="#" type="text" class="form-control">{{ old('kegiatan') }}</textarea>
                    @error('kegiatan')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection