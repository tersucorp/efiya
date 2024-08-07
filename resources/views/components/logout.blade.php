<form method="POST" action="/logout" id="logout">
    @csrf
    <button type="submit">{{ $slot }}</button>
</form>
