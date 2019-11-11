{!! HTML::decode(link_to(url('users/'.$user->id),  Helper::gravatarFor($user, 50))) !!}
<h1>{{ $user->name }}</h1>
<a href="{{ url('users/'.$user->id) }}">
    <span>view my profile</span>
</a>
<span>{{ $user->microposts->count()}} {{ Str::plural('micropost', $user->microposts->count()) }}</span>		
