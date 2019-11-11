@if ($user->id != $auth_user->id)
    <div id="follow_form">
	@if ($auth_user->alreadyFollowed($user))
	    @include('users.follow_button', ['follow' => 'hide', 'unfollow' => ''])
	@else
	    @include('users.follow_button', ['follow' => '', 'unfollow' => 'hide'])
	@endif
    </div>
@endif
