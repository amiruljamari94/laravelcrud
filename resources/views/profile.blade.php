@extends('layouts.app')

@section('content')
<div class="container">
    <div class="h1">User Profile</div>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Registered at: {{ $user->created_at }}</p>
    
</div>
@endsection



