@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Edit User</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
    @method('PUT')
    @csrf
        <div class="form-group">

            <label for="" class="form-label">Name</label>

            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
        </div>

        <div class="form-group">

            <label for="" class="form-label">Email</label>

            <input type="text" readonly class="form-control" name="email" value="{{ $user->email }}">
        </div>

        <div class="form-group">

            <label for="" class="form-label">New Password</label>

            <input type="password" class="form-control" name="name">
        </div>



        <div class="form-group">

            <label for="" class="form-label">Created At</label>
            {{ $user->created_at }}
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>


</div>

@endsection
