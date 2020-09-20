@extends('layouts.app')

@section('content')

<div class="container">

    <h1>New Article</h1>

    <form action="{{ route('article:store') }}" method="POST">
    @csrf
        <div class="form-group">

            <label for="" class="form-label">Title</label>

            <input type="text" class="form-control @error ('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $errors->first('title') }}
            
            </div>
            @enderror
        </div>

        <div class="form-group">
        
            <label for="" class="form-label">Body</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control @error ('body') is-invalid @enderror">{{ old('body') }}</textarea>
            @error('body')
            <div class="invalid-feedback">
                {{ $errors->first('body') }}
            
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>
@endsection