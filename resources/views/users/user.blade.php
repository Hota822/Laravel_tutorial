@foreach($users as $user)
    <li>
	{!! HTML::decode(link_to(url('users/'.$user->id),  Helper::gravatar_for($user, 50))) !!}
	{{ link_to("users/{$user->id}", $user->name) }}
	@if ($admin->admin && $user != $admin)
	    | <a href="{{ url("users/{$user->id}") }}"
	       onclick="event.preventDefault();
                        document.getElementById('delete_user').submit();">
		{{ __('delete') }}
	    </a>
	    <form id="delete_user" class="delete_link" action="{{ url("users/{$user->id}") }}" method="POST">
		@csrf
		@method('DELETE')
	    </form>
	@endif 
    </li>
    <br>
@endforeach
