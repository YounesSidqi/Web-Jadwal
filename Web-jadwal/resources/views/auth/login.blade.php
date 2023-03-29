@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action="{{route('login')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input name="email" value="{{ old('email') }}" type="email" class="form-control">
                    @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input name="password" value="{{ old('password') }}" type="password" class="form-control"></input>
                    @error('password')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

@endsection