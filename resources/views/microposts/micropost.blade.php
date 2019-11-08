@foreach($microposts as $micropost)
    <li id="micropost-{{ $micropost->id }}">
	{!! HTML::decode(link_to(url('users/'.$user->id),  Helper::gravatar_for($micropost->user, 50))) !!}
	<a href="{{ url('users/'.$user->id) }}">
	    <span class="user">{{ $micropost->user->name }}</span>
	</a>
	<span class="content">
	    {{ $micropost->content }}
	    @if (!empty($micropost->picture))
		<img src="/storage/images/{{ $micropost->id }}_{{ $micropost->picture }}">
	    @endif
	</span>
	<span class="timestamp">
	    Posted {{ Helper::timeAgoInWords($micropost->created_at) }}
	    {{-- $micropost->created_at --}}
	    @if ($micropost->user_id == $auth_user->id)
   		<a href="{{ url("microposts/{$micropost->id}") }}"
		   onclick="event.preventDefault();
                        document.getElementById('delete_micropost').submit();"
		   data-confirm="You sure?">
		    {{ __('delete') }}
		</a>
		<form id="delete_micropost" class="delete_link" action="{{ url("microposts/{$micropost->id}") }}" method="POST">
		    @csrf
		    @method('DELETE')
		</form>
	    @endif
	</span>
    </li>
@endforeach
