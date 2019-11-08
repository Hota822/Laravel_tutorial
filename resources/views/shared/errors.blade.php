@php
$count = count($errors)
@endphp

@if ($count > 0)
    <div class="alert alert-danger">
	<strong>The form contains {{ $count }} {{ Str::plural('error', $count) }}</strong>
	<br><br>
	<ul>
	    @foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	    @endforeach
	</ul>
    </div>
@endif
