@extends('layouts.application')

@php
$user = Auth::user();
$title = $user->name;
@endphp

@section('content')
    <div class="row">
	<aside class="col-md-4">
	    <section class="user_info">
		<h1>
		    {{ Helper::gravatar_for($user) }}
		    {{ $user->name }}
		</h1>
	    </section>
	</aside>
    </div>
@endsection
