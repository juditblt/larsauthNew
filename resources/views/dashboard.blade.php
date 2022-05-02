<h1>Dashboard</h1>

<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="Kilépés">
</form>

<a href="{{ route('upload') }}">Kép feltöltése</a>

<hr>

Képek...
