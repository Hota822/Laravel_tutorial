@extends('layouts.application')

@section('content')
    <div class="row">
	<aside class="col-md-4">
	    <section class="user_info">
		{{ Helper::gravatarFor($user) }}
		<h1>{{ $user->name }}</h1>
		<a href="{{ url('users/'.$user->id) }}">
		    <span>view my profile</span>
		</a>
		<span><b>Microposts:</b> {{ $user->microposts->count() }}</span>
	    </section>
	    <section class="stats">
		@include('shared.stats')
		@if ($users->count() != 0)
		    <div class="user_avatars">
			@foreach ($users->get() as $other_user)
			    {!! HTML::decode(link_to(url('users/'.$other_user->id),  Helper::gravatarFor($other_user, 30))) !!}
			@endforeach
		    </div>
		@endif
	    </section>
	</aside>
	<div class="col-md-8">
	    <h3>{{ $title }}</h3>
	    @if ($users->count() != 0)
		@php
		$users = $users->paginate(30)
		@endphp
		<ul class="users follow">
		    @include('users.user')
		</ul>
		{{ $users->links() }}
	    @endif
	</div>
    </div>
@endsection
