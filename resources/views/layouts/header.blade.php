@php
$user = Auth::user();
$id = Auth::id();
$auth = Helper::hasVerified($user);
@endphp

<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
	{{ link_to('/', 'Sample App', ['id' => 'logo'] ) }}
	<nav>
	    <ul class="nav navbar-nav navbar-right">
		<li>{{ link_to('/', 'Home') }}</li>
		<li>{{ link_to(url('help'), 'Help') }}</li>
		@if ($auth)
		    <li>{{ link_to(url('users'), 'Users') }}</li>
		    <li class="dropdown">
			<a href='#' class="dropdown-toggle" data-toggle="dropdown">
			    Account <b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
			    <li><a href="{{ url('users/'.$id) }}">Profile</a></li>
			    <li><a href="{{ url("users/{$id}/edit") }}">Setting</a></li>
			    <li class="divider"><li>
			    <li>
				<a class="dropdown-item" href="{{ route('logout') }}"
				   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
				    {{ __('Logout') }}
				</a>

				<form id="logout-form" class="delete_link" action="{{ route('logout') }}" method="POST">
				    @csrf
				</form>
			    </li>
			</ul>
		    </li>
		@else
		    <li>{{ link_to(route('login'), 'Log in') }}</li>
		@endif
	    </ul>
	</nav>
    </div>
</header>
