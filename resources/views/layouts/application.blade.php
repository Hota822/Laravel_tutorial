<!DOCTYPE html>
@php

@endphp
<html>
    <head>
	<title>{{ Helper::fullTitle($title) }}</title>

	<meta charset="utf-8">
	<!-- カスタムCSSの読み込み  -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- CSRFトークン -->
	<meta name="csrf-token" content="{{ csrf_token() }}">


	<!-- Bootstrap3-css（CDN） -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Bootstrap4-css（CDN）  -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	

    </head>

    <body>
	@include('layouts/header')
	@include('common/errors')
	@include('common/success')
	<div class="container">
	    @yield('content')
	</div>

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	@include('layouts/footer')
	<!-- カスタムJSの読み込み -->
	<script src="{{ asset('/js/custom.js') }}"></script>

	<!-- Bootstrap3-js（CDN） -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

	<!-- Bootstrap4-js（CDN） -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    </body>
</html>
