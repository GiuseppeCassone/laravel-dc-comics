@extends('layouts.app')

@section('content')
<div>
    <h1>{{$comic->title}}</h1>
    <img src="{{$comic->thumb}}" alt="">

    <div class="py-5">
            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Modifica</a>

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Elimina
            </button>          
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il fumetto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                Sei sicuro che vuoi eliminare il fumetto "{{$comic->title}}"
            </div>


            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf
                    @method("DELETE")

                    <button class="btn btn-danger">Elimina</button>
                </form>

            </div>

        </div>
    </div>
</div>
@endsection