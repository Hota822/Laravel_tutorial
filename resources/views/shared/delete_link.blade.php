
<a href="{{ url("{$to}s/{$to_id}") }}"
   onclick="event.preventDefault();
if (window.confirm('You sure?')) { 
                        document.getElementById('delete_{{ $to }}').submit();}">
    {{ __('delete') }}
</a>
<form id="delete_{{ $to }}" class="hide" action="{{ url("{$to}s/{$to_id}") }}" method="POST">
    @csrf
    @method('DELETE')
</form>
