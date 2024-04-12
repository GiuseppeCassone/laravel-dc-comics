@extends('layouts.app')

@section('content')

    <h1>MODIFICA IL FUMETTO</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Poster</label>
            <textarea type="text" class="form-control" id="thumb" name="thumb">{{$comic->thumb}}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di Uscita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Disegnatori</label>
            <textarea type="text" class="form-control" id="artists" name="artists">{{$comic->artists}}</textarea>
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Serie</label>
            <textarea type="text" class="form-control" id="writers" name="writers">{{$comic->writers}}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection