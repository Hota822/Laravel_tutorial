@extends('layouts.application')

@php
$auth_user = Auth::user();

if (is_null($user)) {
    $user = $auth_user;
}

$title = $user->name;
@endphp

@section('content')
    <div class="row">
	<aside class="col-md-4">
	    <section class="user_info">
		<h1>
		    {{ Helper::gravatar_for($user) }}
		    Name: {{ $user->name }}<br>
		    Email: {{ $user->email }}<br>
		    ID: {{ $user->id }}
		</h1>
	    </section>
	    <section class="stats">
		<div class="stats">
		    
		    <a href="{{ url("users/{$user->id}/following") }}">
			<strong id="following" class="stat">
			    {{ $user->following->count() }}
			</strong>
			following
		    </a>
		    <a href="{{ url("users/{$user->id}/followers") }}">
		        <strong id="followers" class="stat">
			    {{ $user->followers->count() }}
			</strong>
			followers
		    </a>
		</div>
	    </section>

	    @if ($user->id != $auth_user->id)
	    <div id="follow_form">
		@if ($auth_user->alreadyFollowed($user))
		    <form id="follow_content" method="POST" action="{{ url("relationship/{$user->id}") }}">
			@csrf
			@method('DELETE')
			<input id="followed_id" type="hidden" name="followed_id" value="{{ $user->id }}">
			<input id="follower_id" type="hidden" name="follower_id" value="{{ $auth_user->id }}">			
			<!-- <input  type="submit" class="btn" value="unfollow"> -->
			<button id="follow_button" type="button" class="btn" >unfollow</button>			
		    </form>
		@else
		    <form id="follow_content" method="POST" action="{{ url('relationship') }}">
			@csrf
			<input id="followed_id" type="hidden" name="followed_id" value="{{ $user->id }}">
			<input id="follower_id" type="hidden" name="follower_id" value="{{ $auth_user->id }}">
			<!-- <input type="submit" class="btn btn-primary" value="follow"> -->
			<button id="follow_button" type="button" class="btn btn-primary">follow</button>
		    </form>
		@endif
	    </div>
	    @endif

	</aside>
	<div class="col-md-8">
	    <h3>Microposts ( {{ $microposts->count() }}</h3>
	    <ol class="microposts">
		@php

		@endphp
		@foreach($microposts as $micropost)
		    <li id="micropost-{{ $micropost->id }}">
			    {{ Helper::gravatar_for($micropost->user) }}
 			<span class="user">{{ $micropost->user->name }}</span>
			<span class="content">{{ $micropost->content }}</span>
			<span class="timestamp">
			    Posted at {{ $micropost->created_at }}
			</span>
			@if ($micropost->user == $auth_user)
			<form action="{{ url("microposts/{$micropost->id}") }}" method="POST" class="inline_block" >
			    @method('DELETE')
			    @csrf
			    <button type="submit" class="btn btn-primary">
				delete
			    </button>
			</form>
			@endif

		    </li>
		    <hr>
		@endforeach
	    </ol>
	    {{ $microposts->links() }}
	</div>
    </div>
@endsection
