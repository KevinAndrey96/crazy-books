@extends('layouts.dashboard')
<br>
<br>
@section('content')

    <div style="margin-left: 20%">
        
    <div class="card mb-3 text-dark bg-light m-2" style="width: 90%; margin: 2%;">
        <h1 class="m-5">Foro para el libro : {{ $book->name }}</h1>
        <form action="{{ route('experiences.store') }}" method="POST">
            @csrf
            
            <br>
            
            <input type="hidden" name="book_id" value="{{ $book->id }}">
            <br>
           
            <br>
            <textarea class="form-control " style=" max-width: 70%; margin-left:5%; border: 2px solid blue;" name="content" id="content" rows="4"></textarea>
            <br>
            <button class="btn btn-warning m-5" type="submit">Crear Comentario</button>
        </form>

    </div>


    <h1>Lista de comentarios</h1>


    @foreach ($experiences as $experience)
<br><br>
    <div class="card mt-4" style="max-width: 80%" >
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">{{ $experience->user->name }}</h6>
            <p class="mb-0 text-white ps-3">
                
                
              
            </p>
          </div>
        </div>
        <div class="card-body">
          <p>{{ $experience->content }}</p>
          @if ($experience->user_id === Auth::id())
          <!-- Botones de editar y eliminar solo para el usuario actual -->
          <div style="display: flex;" >
              <form action="{{ route('experiences.destroy', $experience->id) }}" method="POST">
                  @method('DELETE')
                  @csrf
                  <i class="material-icons text-2xl">face</i>
                  <input  style="margin:5px " type="submit" width="100%" class="btn btn-danger" value="Eliminar">
              </form>
          </div>
      @endif
        </div>
      </div>
       <br><br>

    @endforeach
</div>
