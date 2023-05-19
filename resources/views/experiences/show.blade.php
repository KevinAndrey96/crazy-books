@extends('layouts.dashboard')
<br>
<br>
@section('content')

    <div style="margin-left: 20%">
        
    <div class="card mb-3 text-dark bg-light m-2" style="width: 70%; margin: 2%;">
        <h1 class="m-2">Foro para el libro : {{ $book->name }}</h1>
        <form action="{{ route('experiences.store') }}" method="POST">
            @csrf
            <h1 class="m-2"><label for="user_id">Crea un comentario</label></h1>
            <br>
            <h4 class="m-2"><label for="book_id">Libro: {{ $book->name }}</label></h4>
            <input type="hidden" name="book_id" value="{{ $book->id }}">
            <br>
            <h4 class="m-2"><label for="content">Comentario:</label></h4>
            <br>
            <textarea class="form-control" style="max-width: 80%; border: 2px solid blue;" name="content" id="content" rows="4"></textarea>
            <br>
            <button class="btn btn-warning m-2" type="submit">Crear Comentario</button>
        </form>

    </div>


    <h1>Lista de comentarios</h1>


    @foreach ($experiences as $experience)

        @foreach ($experience->book->experiences as $comment)

            <div class="card mb-3 text-dark bg-light" style="max-width: 80%; margin: 2%;">
                <div class="card-header"></div>
                <div class="row g-0">
                    <div class="col-md-4" style="max-width: 10%">
                        <img src="{{ asset('img/LOGO.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">

                            <h3 class="card-title"></h3>
                            <br>
                            <h5 class="card-title">User: {{ $comment->user->name }}</h5>
                            <br>
                            <p class="card-text" style="font-size: 200%;">{{ $comment->content }}</p>

                        </div>
                    </div>
                </div>
                @if ($comment->user_id === Auth::id())
                    <!-- Botones de editar y eliminar solo para el usuario actual -->
                    <div style="display: flex;" >
                        <form action="{{ route('experiences.destroy', $experience->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input  style="margin:5px " type="submit" width="100%" class="btn btn-danger" value="Eliminar">
                        </form>
                    </div>
                @endif
                <div class="card-footer text-warning border-success d-flex align-items-center" style="height: 10%;">
                    <p class="card-text" style="font-size: 100%;">Fecha del comentario: {{ $comment->created_at }}</p>
                </div>
            </div>
        @endforeach

    @endforeach
</div>
