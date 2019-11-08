<form id="follow_content" method="POST" action="{{ url('relationship') }}">
    @csrf
    <input id="followed_id" type="hidden" name="followed_id" value="{{ $user->id }}">
    <input id="follower_id" type="hidden" name="follower_id" value="{{ $auth_user->id }}">
    <!-- <input type="submit" class="btn btn-primary" value="follow"> -->
    <button id="follow_button" type="button" class="btn btn-primary btn-block">follow</button>
</form>
