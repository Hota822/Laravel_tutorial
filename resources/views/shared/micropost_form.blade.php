<form method="POST" action="{{ route('microposts.store') }}" enctype="multipart/form-data">
    @csrf
    @include('shared.errors')
    <div class="field">
	<textarea name="content"  placeholder="Compose new micropost..."></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Post">
    <span class="picture">
	<input type="file" name="picture">
    </span>
</form>
