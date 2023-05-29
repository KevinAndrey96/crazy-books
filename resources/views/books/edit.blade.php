@extends('layouts.dashboard')
@section('navbar')
<br>
<br>
<br>
<br>
<br>
<br>

    

<div class="container my-auto">
    <div class="row">
      <div class="col-lg-4 col-md-8 col-12 mx-auto">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
              <h4 class="text-white font-weight-bolder text-center mt-2 my-0">Editar Libro</h4>
              <div class="row mt-3">

            </div>
          </div>
          <div class="card-body">
           
              <form class="form" class="text-start" action="{{ route('books.update',$book)}}" method="POST">
                @csrf
                @method('PUT')

                
                <div class="from-select input-group-outline my-3">
                  <label >region: </label >
                    <select class="form-select" name="region_id" id="region_id" required>
                        
                        <option value="{{$book->regions->id}}">{{$book->regions->name}}</option>
                       
                    </select>
                </div>
              <label >Nomyre del libro: </label >
              <div class="input-group input-group-outline my-3">
                <label ></label >
                <input type="text" class="form-control" name="name" value="{{$book->name}}" autocomplete="name" autofocus>
              </div>
              <label >Portada: </label >
              <div class="input-group input-group-outline my-3">
                
                <input type="text" class="form-control" name="front_page" value="{{$book->front_page}}" autocomplete="front_page" autofocus>
              </div>
              <label >Lapiz:</label >
              <div class="input-group input-group-outline my-3">
                
                <input type="text" class="form-control" name="circle_audio" value="{{$book->circle_audio}}" autocomplete="circle_audio" autofocus>
              </div>
              <label >Mapa: </label >
              <div class="input-group input-group-outline my-3">
                
                <input type="text" class="form-control" name="rectangle_audio" value="{{$book->rectangle_audio}}" autocomplete="rectangle_audio" autofocus>
              </div>
              <label >Emoji de cara sonriente: </label >
              <div class="input-group input-group-outline my-3">
               
                <input type="text" class="form-control" name="triangle_audio" value="{{$book->triangle_audio}}" autocomplete="triangle_audio" autofocus>
              </div>
              <label >Ojo: </label >
              <div class="input-group input-group-outline my-3">
                
                <input type="text" class="form-control" name="triangle_text" value="{{$book->triangle_text}}" autocomplete="triangle_text" autofocus>
              </div>
              <label >TV: </label >
              <div class="input-group input-group-outline my-3">
                
              <input type="text" class="form-control" name="start_media_1" value="{{$book->start_media_1}}" autocomplete="start_media_1" autofocus>
              </div>
              <label for="">Pendiente</label>
              <div class="input-group input-group-outline my-3">
                
                <input type="text" class="form-control" name="start_media_2" value="{{$book->start_media_2}}" autocomplete="start_media_2" autofocus>
              </div>
              <label >Diamante: </label >
              <div class="input-group input-group-outline my-3">
                
                <input type="text" class="form-control" name="square_media_1" value="{{$book->square_media_1}}" autocomplete="square_media_1" autofocus>
              </div>
              <label >Globo de texto: </label >
              <div class="input-group input-group-outline my-3">
                
                <input type="text" class="form-control" name="square_media_2" value="{{$book->square_media_2}}" autocomplete="square_media_2" autofocus>
              </div>
              <label >Logo multimedia verde: </label >
              <div class="input-group input-group-outline my-3">
                
                <input type="text" class="form-control" name="rectangle_text" value="{{$book->rectangle_text}}" autocomplete="rectangle_text" autofocus>
              </div>




              <div class="text-center">
                <button type="submit" class="btn bg-gradient-success w-100 my-4 my-2">Editar</button>
              </div>
              <p class="mt-4 text-sm text-center">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
<br>
<br>
<br>
<br>
<br>
@endsection