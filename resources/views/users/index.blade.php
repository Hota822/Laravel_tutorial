@php
$title = 'All users';
@endphp

@extends('layouts.application')

@section('content')
    <ul class="users">
	@foreach($users as $user)
	    <li>
		{{ Helper::gravatar_for($user) }}
		{{ link_to("users/{$user->id}", $user->name) }}
		<form action="{{ url("users/{$user->id}") }}" method="POST" >
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
