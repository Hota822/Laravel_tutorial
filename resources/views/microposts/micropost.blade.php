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
		@include('shared.delete_link', ['to' => 'micropost', 'to_id' => $micropost->id])
	    @endif
	</span>
    </li>
@endforeach
