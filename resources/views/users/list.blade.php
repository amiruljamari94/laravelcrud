
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Articles</h1>

        <a href="{{ route('users.create') }}" class="btn btn-primary mb-2">New User</a>

        <table class="table table-bordered">
        
            <thead>
                <tr>
                
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            
            </thead>
            <tbody>

                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('H:i A d-m-Y')}}</td>
                        <td> 
                        
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                            <!-- <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>-->
                            <form style="display: inline" method="POST"
      action="{{ route('users.destroy', $user->id) }}">
    @csrf
    @method('DELETE')
        <button type="button"
                class="btn btn-danger delete-user">
            Delete
        </button>
</form>
                         
                        </td>
                        
                    
                    </tr>

                @endforeach

            </tbody>
        </table>

        {{ $users->links() }}
    
</div>
<script>
$(function() {
$('.delete-user').click(function (e) {
    e.preventDefault();
    if (confirm('Are you sure you want to delete this item?')) {
        $(e.target).closest('form').submit()
    }
});
});
</script>
@endsection