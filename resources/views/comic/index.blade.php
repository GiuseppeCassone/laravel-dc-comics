@extends('layouts.app')

@section('index-content')

    <ul>
        @foreach($comics as $comic)
        <li>{{ $comic->title }}<a href="">Visualizza</a></li>
        @endforeach
    </ul>
@endsection