<form id="unfollow_content" class="{{ $unfollow }}" method="POST" action="{{ url("relationship/{$user->id}") }}">
    @csrf
    @method('DELETE')
    <input id="followed_id" type="hidden" name="followed_id" value="{{ $user->id }}">
    <input id="follower_id" type="hidden" name="follower_id" value="{{ $auth_user->id }}">			
    <!-- <input  type="submit" class="btn" value="unfollow"> -->
    <button name="follow_button" type="button" class="btn btn-block" >unfollow</button>			
</form>

<form id="follow_content" class="{{ $follow }}" method="POST" action="{{ url('relationship') }}">
    @csrf
    <input id="followed_id" type="hidden" name="followed_id" value="{{ $user->id }}">
    <input id="follower_id" type="hidden" name="follower_id" value="{{ $auth_user->id }}">
    <!-- <input type="submit" class="btn btn-primary" value="follow"> -->
    <button name="follow_button" type="button" class="btn btn-primary btn-block">follow</button>
</form>
