@php
$count = count($errors)
@endphp

@if ($count > 0)
    <div id="error_explanation">
	<div class="alert alert-danger">
	    <strong>The form contains {{ $count }} {{ Str::plural('error', $count) }}</strong>
	    <br>
	</div>
	
	<ul>
	    @foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	    @endforeach
	</ul>
    </div>
@endif
