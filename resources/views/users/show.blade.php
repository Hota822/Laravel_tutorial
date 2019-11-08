@extends('layouts.application')

@php
$auth_user = Auth::user();

if (is_null($user)) {
    $user = $auth_user;
}
$count = $microposts->count();
$microposts = $microposts->paginate(30);
$title = $user->name;

@endphp

@section('content')
    <div class="row">
	<aside class="col-md-4">
	    <section class="user_info">
		<h1>
		    {{ Helper::gravatar_for($user) }}
		    {{ $user->name }}<br>
		</h1>
	    </section>
	    <section class="stats">
		@include('shared.stats')
	    </section>
	</aside>
	<div class="col-md-8">
	    @include('users.follow_form')

	    @if ($count != 0)
		<h3>Microposts ({{ $count }}) </h3>
		<ol class="microposts">
		    @include('microposts.micropost')
		</ol>
		{{ $microposts->links() }}
	    @endif
	</div>
    </div>
@endsection
