@php
$title = 'All users';
@endphp

@extends('layouts.application')

@section('content')
    <h1>All users</h1>
    
    {{ $users->links() }}    
    <ul class="users">
	@include('users.user')
    </ul>
    {{ $users->links() }}
    
@endsection
