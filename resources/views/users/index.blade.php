@php
$title = 'All users';
@endphp

@extends('layouts.application')

@section('content')
    <ul class="users">
	@foreach($users as $user)
	    <li>
		{{ Helper::gravatar_for($user) }}
		<div class="inline_block">
		    Id: {{ $user->id }}<br>
		    Name: {{ link_to("users/{$user->id}", $user->name) }}</br>
		    Email: {{ $user->email }}<br>
		</div>
		<form action="{{ url("users/{$user->id}") }}" method="POST" class="inline_block" >
		    @method('DELETE')
		    @csrf
		    <button type="submit" class="btn btn-primary">
                        {{ 'delete user' }}
		    </button>
		</form>
	    </li>
	    <br>
	@endforeach
	{{ $users->links() }}
    </ul>
@endsection
