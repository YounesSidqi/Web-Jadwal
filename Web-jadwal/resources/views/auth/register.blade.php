@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                    @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

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

                <div class="mb-3">
                    <label for="" class="form-label">Password Conformation</label>
                    <input name="password_confirmation" type="password" class="form-control"></input>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>

@endsection