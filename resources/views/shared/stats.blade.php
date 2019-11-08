
<div class="stats">    
    <a href="{{ url("users/{$user->id}/following") }}">
	<strong id="following" class="stat">
	    {{ $user->following->count() }}
	</strong>
	following
    </a>
    <a href="{{ url("users/{$user->id}/followers") }}">
	<strong id="followers" class="stat">
	    {{ $user->followers->count() }}
	</strong>
	followers
    </a>
</div>
