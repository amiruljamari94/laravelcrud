@extends('layouts.app')

@section('content')

<div class="container">

    <h1>New User</h1>

    <form action="{{ route('users.store') }}" method="POST">
    @csrf
        <div class="form-group">

            <label for="" class="form-label">Name</label>

            <input type="text" class="form-control @error ('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
            @error('name')
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            
            </div>
            @enderror
        </div>

        <div class="form-group">

        <label for="" class="form-label">Email</label>
            <input type="text" class="form-control @error ('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $errors->first('email') }}
            
            </div>
            @enderror
        </div>

        <div class="form-group">
        <label for="" class="form-label">Password</label>

            <input type="password" class="form-control @error ('password') is-invalid @enderror" name="password" value="{{ old('name') }}">
            @error('password')
            <div class="invalid-feedback">
                {{ $errors->first('password') }}
            
            </div>
            @enderror
        </div>

    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>
@endsection