@extends('layouts.dashboard')
@section('navbar')
<body>
    <!-- Vista "create.blade.php" -->
<div class="card mb-3 text-darck bg-light m-2 " style="width: 70% margin:2%;">

<form action="{{ route('experiences.store') }}" method="POST" >
    @csrf

    <h1 class="m-2"> <label for="user_id"> Crea un comentario </label> </h1>
     
    <br>
    <h4 class="m-2"><label for="book_id">Libro:</label></h4>
    <select class="m-2" name="book_id" id="book_id">
        @foreach ($books as $book)
            <option value="{{ $book->id }}">{{ $book->name }}</option>
        @endforeach
    </select>
    <br>
    <h4 class="m-2"><label for="content">Comentario:</label></h4>
    <br>
    
    <textarea class="form-control " style=" max-width: 80%; margin-left:30%; border: 2px solid blue;" name="content" id="content" rows="4"></textarea>

    <br>
    <button class="btn btn-warning m-4" type="submit">Crear Comentario</button>
</form>

</div>

<!-- Vista: index.blade.php -->

<h1>Lista de comentarios</h1>

@foreach($experiences as $experience)
    @foreach($experience->book->experiences as $comment)
    <div>
       
 
    </div>
    @endforeach

@endforeach



    

@foreach($experience->book->experiences as $comment)

<div class="card mb-3 text-darck bg-light "  style="max-width: 80%; margin: 2%; ">
    <div class="card-header">Libro: {{ $experience->book->name }}</div>
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{asset('img/LOGO.png')}}"" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          
          <h3 class="card-title"></h3>
          <br>
          <h5 class="card-title">User: {{ $comment->user->name}}</h5>
          <br>
          <p class="card-text" style="font-size: 200%" >{{ $comment->content}}</p>
        

          

        </div>
      </div>
    </div>
    @if($comment->user_id === Auth::id())
    <!-- Botones de editar y eliminar solo para el usuario actual -->
    <div  style="display: flex; ">
     
    <!-- <button style="margin:5px;" class="btn btn-success">Edit</button> -->

    <form  action="{{route('experiences.destroy',$experience->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <input style="margin:5px;" type="submit" width="100%" class="btn btn-danger" value="Eliminar">
        
    </form>
    </div>
  @endif
    <div class="card-footer text-waning  border-success d-flex align-items-center" style="height:10%;">
        <p class="card-text" style="font-size: 100%; " > Fecha del comentario: {{ $comment->created_at}}</p>
    </div>
  </div>
  
</div>

    
  

       
@endforeach

@endsection

