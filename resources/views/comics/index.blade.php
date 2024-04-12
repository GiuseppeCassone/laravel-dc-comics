@extends('layouts.app')

@section('index-content')

    <ul>
        @foreach($comics as $comic)
        <li>{{ $comic->title }}<a href="{{route('comics.show', $comic->id)}}">Visualizza</a></li>
        @endforeach
    </ul>

    <a href="{{route('comics.create')}}" class="btn btn-info">Aggiungi Fumetto</a>
@endsection