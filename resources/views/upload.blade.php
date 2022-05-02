<h2>Kép feltöltése</h2>

<form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
    @csrf
    Kép:
    <input type="file" name="image" id="image">
    <br>
    Alt:
    <input type="text" name="alt" id="alt">
    <br>
    Leírás:
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Feltöltés">
</form>

@foreach($errors->all() as $error)
    {{ $error }}
    <br>
@endforeach
