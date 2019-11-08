<form method="POST" action="{{ route('microposts.store') }}">
    @csrf
    <div class="field">
	<textarea name="textarea"  placeholder="Compose new micropost..."></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Post">
</form>
