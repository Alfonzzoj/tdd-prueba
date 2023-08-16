<a href="{{ route('clients.destroy', ['language' => app()->getLocale(), 'client' => $client->id]) }}"
    onclick="event.preventDefault(); document.getElementById('delete-form').submit();" class="remove" title="Eliminar">
    <i class="uil uil-trash-alt"></i>

</a>

<form id="delete-form"
    action="{{ route('clients.destroy', ['language' => app()->getLocale(), 'client' => $client->id]) }}" method="POST"
    style="display: none;">
    @csrf
    @method('DELETE')
</form>