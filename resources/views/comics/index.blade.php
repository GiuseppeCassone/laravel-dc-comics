@extends('layouts.app')

@section('index-content')
    <h1 class="mb-5">Lista Fumetti</h1>
   
    <table class="table mb-5">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td class="align-middle">{{$comic->title}}</td>
                <td class="text-end"><a class="btn btn-info" href="{{route('comics.show', $comic->id)}}">Visualizza</a></td>
            </tr>                   
            @endforeach
        </tbody>
    </table>

    <a href="{{route('comics.create')}}" class="btn btn-info">Aggiungi Fumetto</a>
@endsection