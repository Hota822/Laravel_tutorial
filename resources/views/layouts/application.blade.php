<!DOCTYPE html>




<html>
    <head>
	<title>{{ Helper::fullTitle($title) }}</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="{{ asset('/js/custom.js') }}"></script>
    </head>

    <body>
	@yield('content')
    </body>
</html>
