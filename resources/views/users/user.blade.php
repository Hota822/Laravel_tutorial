@foreach($users as $user)
    <li>
	{!! HTML::decode(link_to(url('users/'.$user->id),  Helper::gravatar_for($user, 50))) !!}
	{{ link_to("users/{$user->id}", $user->name) }}
	@if ($admin->admin && $user != $admin)
	    |
	    @include('shared.delete_link', ['to' => 'user', 'to_id' => $user->id])
	@endif 
    </li>
    <br>
@endforeach
