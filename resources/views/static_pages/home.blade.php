@extends('layouts.application')
@php
$title = 'Home';
@endphp



@section('content')
    <div class="center jumbotron">
	<h1>Welcome to the Sample App</h1>

	<h2>
	    This is the home page for the
	    <a href="https://railstutorial.jp/">Ruby on Rails Tutorial</a>
	    sample application.
	</h2>

	{{ link_to(route('signup'), 'Sign up now!', [ 'class' => "btn btn-lg btn-primary"] ) }}
    </div>

    {!! link_to('http://rubyonrails.org/', HTML::image('rails.png'),$escape=false) !!}
    {!! HTML::decode(link_to('http://rubyonrails.org/', HTML::image('rails.png'))) !!}
    @php echo HTML::decode(link_to('http://rubyonrails.org/', HTML::image('rails.png'))) @endphp
    {!! HTML::decode(link_to('http://rubyonrails.org/', HTML::image('kitten.jpg'))) !!}
    <div id="aaaa" value="aaa">bbb</div>
    <input type=text value="text" id="text">
@endsection

