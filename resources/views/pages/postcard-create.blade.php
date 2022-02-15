@extends('layouts.main-layout')

@section('content')

    <form 
        action="{{route('postcard.store')}}" 
        method="post"
        enctype="multipart/form-data">

        @method('post')
        @csrf

        <label for="sender">Mittente:</label>
        <input type="text" name="sender"> <br>

        <label for="address">Indirizzo:</label>
        <input type="text" name="address"> <br>

        <label for="text">Corpo del testo:</label>
        <input type="text" name="text"> <br>

        <label for="image">Immagine:</label>
        <input type="file" name="image"> <br>

        <input class="btn btn-secondary" type="submit" value="CREATE">
    </form>
    
@endsection