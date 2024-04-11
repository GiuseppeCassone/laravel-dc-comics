@extends('layouts.app')

@section('content')

    <h1>AGGIUNGI UN FUMETTO</h1>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Poster</label>
            <textarea type="text" class="form-control" id="thumb" name="thumb"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di Uscita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Disegnatori</label>
            <textarea type="text" class="form-control" id="artists" name="artists"></textarea>
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Serie</label>
            <textarea type="text" class="form-control" id="writers" name="writers"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection