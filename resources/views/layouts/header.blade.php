<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
	{{ link_to('/', 'Sample App', ['id' => 'logo'] ) }}
	<nav>
	    <ul class="nav navbar-nav navbar-right">
		<li>{{ link_to('/', 'Home') }}</li>
		<li>{{ link_to(url('help'), 'Help') }}</li>
		<li>{{ link_to('/', 'Logs in') }}</li>
	    </ul>
	</nav>
    </div>
</header>
