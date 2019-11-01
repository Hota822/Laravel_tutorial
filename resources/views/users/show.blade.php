@extends('layouts.application')

@php
if (is_null($user)) {
    $user = Auth::user();
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
		    </li>
		    <hr>
		@endforeach
	    </ol>
	    {{ $microposts->links() }}
	</div>
    </div>
@endsection
