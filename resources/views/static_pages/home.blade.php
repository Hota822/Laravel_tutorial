@extends('layouts.application')

@php
$title = 'Home';
$user = Auth::user();
$auth_user = $user;
$auth = Helper::hasVerified($user);
@endphp

@section('content')
    @if ($auth)
	@php
	$microposts = $user->feed()->paginate(5);    
	@endphp
	<div class="row">
	    <aside class="col-md-4">
		<section class="user_info">
		    @include('shared.user_info')
		</section>
		<section class="stats">
		    @include('shared.stats')
		</section>
		<section class="micropost_form">
		    @include('shared.micropost_form')
		</section>
	    </aside>
	    <div class="col-md-8">
		<h3>Micropost Feed</h3>
		@include('shared.feed')
	    </div>
 	</div>
    @else
	<div class="center jumbotron">
	    <h1>Welcome to the Sample App</h1>
	    <h4>
		This is the home page for the
		<a href="https://railstutorial.jp/">Ruby on Rails Tutorial</a>
		sample application.
	    </h4>
	    {{ link_to(route('register'), 'Sign up now!', [ 'class' => "btn btn-lg btn-primary"]) }}
	</div>
	{!! HTML::decode(link_to('http://rubyonrails.org/', HTML::image('rails.png'))) !!}
    @endif

@endsection

