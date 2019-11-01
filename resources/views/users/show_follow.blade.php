@php
@endphp

@extends('layouts.application')

@section('content')

    <div class="row">
	<aside class="col-md-4">
	    <section class="user_info">
		{{ Helper::gravatar_for($user) }}
		<h1>{{ $user->name }}</h1>
		<span>view my profile</span>
		<span>Microposts ( {{ $user->microposts->count() }} )</span>
	    </section>
	    <section class="stats">
		<div class="stats">
		    
		    <a href="{{ url("users/{$id}/following") }}">
			<strong id="following" class="stat">
			{{ $user->following->count() }}
			</strong>
			following
		    </a>
		    <a href="{{ url("users/{$id}/followers") }}">
		        <strong id="followers" class="stat">
			    {{ $user->followers->count() }}
			</strong>
			followers
		    </a>
		</div>
	    </section>	    
	</aside>
	<div class="col-md-8">
	    <h3>{{ $title }}</h3>
	    <% if @users.any? %>
	    <ul class="users follow">
		@foreach($users as $other_user)
		    <li>
			{{ Helper::gravatar_for($other_user) }}
			<div class="inline_block">
			    Id: {{ $other_user->id }}<br>
			    Name: {{ link_to("users/{$user->id}", $other_user->name) }}</br>
			    Email: {{ $other_user->email }}<br>
			</div>

		    </li>
		    <br>
		@endforeach
	    </ul>
	    <%= will_paginate %>
	</div>
    </div>
@endsection
