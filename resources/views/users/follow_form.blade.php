@if ($user->id != $auth_user->id)
    <div id="follow_form">
	@if ($auth_user->alreadyFollowed($user))
	    @include('users.follow')
	@else
	    @include('users.unfollow')	    
	@endif
    </div>
@endif
