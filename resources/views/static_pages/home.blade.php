@extends('layouts.application')
@php
$title = 'Home';
$user = Auth::user();
@endphp



@section('content')
    @auth
    @php
    $microposts = $user->microposts()->paginate(5);
    @endphp
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
	    <section class="micropost_form">
		<form method="POST" action="{{ route('microposts.store') }}">
		    @csrf
   		    <!-- <%= render 'shared/error_messages', object: f.object %> -->
		    <div class="field">
			<textarea name="textarea" rows="4" cols="40" placeholder="input this field a new post"></textarea>
		    </div>
		    <input type="submit" class="btn btn-primary" value="Post">
		</form>
	    </section>
	</aside>
	<div class="col-md-8">
	    <h3>Micropost Feed</h3>
	    <!-- <% if @feed_items.any? %> -->
	    <ol class="microposts">

		@foreach($microposts as $micropost)
		    <li id="micropost-{{ $micropost->id }}">
			    {{ Helper::gravatar_for($micropost->user, 50) }}
 			<span class="user">{{ $micropost->user->name }}</span>
			<span class="content">{{ $micropost->content }}</span>
			<span class="timestamp">
			    Posted at {{ $micropost->created_at }}
			</span>
			<div> 
			<form action="{{ url("microposts/{$micropost->id}") }}" method="POST" class="inline_block" >
			    @method('DELETE')
			    @csrf
			    <button type="submit" class="btn btn-primary">
				delete
			    </button>
			</form>
			</div>
		    </li>
		@endforeach
	    </ol>
	    
	    <!-- <% end %> -->
	</div>
    </div>

    @else
    <div class="center jumbotron">
	<h1>Welcome to the Sample App</h1>

	<h2>
	    This is the home page for the
	    <a href="https://railstutorial.jp/">Ruby on Rails Tutorial</a>
	    sample application.
	</h2>

	{{ link_to(route('register'), 'Sign up now!', [ 'class' => "btn btn-lg btn-primary"]) }}
    </div>

    {!! link_to('http://rubyonrails.org/', HTML::image('rails.png'),$escape=false) !!}
    {!! HTML::decode(link_to('http://rubyonrails.org/', HTML::image('rails.png'))) !!}
    @php echo HTML::decode(link_to('http://rubyonrails.org/', HTML::image('rails.png'))) @endphp
    {!! HTML::decode(link_to('http://rubyonrails.org/', HTML::image('kitten.jpg'))) !!}
    <div id="aaaa" value="aaa">bbb</div>
    <input type=text value="text" id="text">
    @endauth
@endsection

