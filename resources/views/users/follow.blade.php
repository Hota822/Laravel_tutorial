<form id="follow_content" method="POST" action="{{ url("relationship/{$user->id}") }}">
    @csrf
    @method('DELETE')
    <input id="followed_id" type="hidden" name="followed_id" value="{{ $user->id }}">
    <input id="follower_id" type="hidden" name="follower_id" value="{{ $auth_user->id }}">			
    <!-- <input  type="submit" class="btn" value="unfollow"> -->
    <button id="follow_button" type="button" class="btn btn-block" >unfollow</button>			
</form>
