@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Articles</h1>

        <a href="{{ route('article:create') }}" class="btn btn-primary mb-2">New Article</a>

        <form class="form-inline mb-2" action="{{ route('article:search') }}" method="GET">
        @csrf
        
            <input type="text" name="keyword" class="form-control mr-2" placeholder="Search by title..." value="{{ request()->keyword }}">

            <button type="submit" class="btn btn-info">Search</button>
        
        
        </form>

        

        <table class="table table-bordered">
        
            <thead>
                <tr>
                
                    <th>ID</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            
            </thead>
            <tbody>

                @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->created_at->format('H:i A d-m-Y')}}</td>
                        <td> 
                        
                            <a href="{{ route('article:edit', $article) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('article:delete', $article) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            
                         
                        </td>
                        
                    
                    </tr>

                @endforeach

            </tbody>
        </table>

        {{ $articles->links() }}
    
</div>

@endsection