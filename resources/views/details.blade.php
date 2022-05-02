<a href="{{ route('index') }}">
    Vissza
</a>
<hr>
{{ $image->alt }}
<br>

<img src="/storage/img/{{ $image->filename }}" alt="{{ $image->alt }}">
<br>
{{ $image->description }}
