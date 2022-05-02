<h1>Galéria</h1>

<hr>
<a href="{{ route('login') }}">Belépés</a>
<hr>

@foreach($images as $image)
    {{--
    {{-- Adott képre kattintva csak az az egy kép látszik --}}
    {{--
    <a href="{{ route('details', ['path'=>basename($image)]) }}">
        <img src="{{ 'storage/' . $image }}" alt="alt1">
    </a>
    <br>
    --}}

    {{ $image->alt }}<br>
    {{ $image->description }}<br>
    <a href="{{ route('details', ['id'=>$image->id]) }}">
    <img src="/storage/img/{{ $image->filename }}" alt="{{ $image->alt }}">
    </a>
    <hr>

@endforeach
