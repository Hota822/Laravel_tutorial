<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
	{{ link_to('/', 'Sample App', ['id' => 'logo'] ) }}
	<nav>
	    <ul class="nav navbar-nav navbar-right">
		<li>{{ link_to('/', 'Home') }}</li>
		<li>{{ link_to(url('help'), 'Help') }}</li>
		@guest
		    <li>{{ link_to(route('login'), 'Logs in') }}</li>
		@endguest
		@auth
		    <li>{{ link_to(url('users'), 'Users') }}</li>
		    <li class="dropdown">
			<a href='#' class="dropdown-toggle" data-toggle="dropdown">
			    Account <b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
			    <li><a href="{{ url('users/{user}') }}">Profile</a></li>
			    <li><a href="{{ url('users/{user}/edit') }}">Setting</a></li>
			    <li>
				<a class="dropdown-item" href="{{ route('logout') }}"
				   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
				    {{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				    @csrf
				</form>
			    </li>
			</ul>
		    </li>
		@endauth
	    </ul>
	</nav>
    </div>
</header>
