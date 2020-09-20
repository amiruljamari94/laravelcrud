@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Edit Article</h1>

    <form action="{{ route('article:update', $article) }}" method="POST">
    @csrf
        <div class="form-group">

            <label for="" class="form-label">Title</label>

            <input type="text" class="form-control" name="title" value="{{ $article->title }}">
        </div>

        <div class="form-group">
        
            <label for="" class="form-label">Body</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{ $article->body }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>


</div>

@endsection