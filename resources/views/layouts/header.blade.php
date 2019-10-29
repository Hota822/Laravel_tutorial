<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
	{{ link_to('/', 'Sample App', ['id' => 'logo'] ) }}
	<nav>
	    <ul class="nav navbar-nav navbar-right">
		<li>{{ link_to('/', 'Home') }}</li>
		<li>{{ link_to(url('help'), 'Help') }}</li>
		<li>{{ link_to('/', 'Logs in') }}</li>

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
	</nav>
    </div>
</header>
