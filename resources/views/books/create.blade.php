@extends('layouts.dashboard')
@section('navbar')
<br>
<br>

<div class="container my-auto">
    <div class="row">
      <div class="col-lg-4 col-md-8 col-12 mx-auto">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
              <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Crear libro</h4>
              <div class="row mt-3">

            </div>
          </div>
          <div class="card-body">
            <form class="form" action="{{ route('books.store') }}" method="POST">
              @csrf


              <label for="region_id">Región:</label>
              <div>
                
                
                <select name="region_id" id="region_id">
                    @foreach ($regions as $region)
                        <option value="{{ $region->id }}">{{ $region->name }}</option>
                    @endforeach
                </select>
            </div>

            <label class="form-label" for="front_page">Portada:</label>
              <div class="input-group input-group-outline my-3">
                
                <label class="form-label"></label>
                <input type="text" class="form-control" name="front_page" id="front_page"  autocomplete="name" autofocus>
              </div>
              <label class="form-label" for="name">Nombre:</label>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="name" id="name"  autocomplete="email" autofocus>
              </div>
              <label class="form-label" for="circle_audio">Audio del círculo:</label>
              <div class="input-group input-group-outline my-3">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="circle_audio" id="circle_audio"  autocomplete="role" autofocus>
              </div>
              <label class="form-label" for="triangle_text">Texto del triángulo:</label>
              <div class="input-group input-group-outline my-3">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="triangle_text" id="triangle_text"  autocomplete="role" autofocus>
              </div>
              <label class="form-label" for="triangle_audio">Audio del triángulo:</label>
              <div class="input-group input-group-outline my-3">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="triangle_audio" id="triangle_audio"  autocomplete="role" autofocus>
              </div>
              <label  class="form-label"for="start_media_1">Medio de la estrella 1:</label>
              <div class="input-group input-group-outline my-3">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="start_media_1" id="start_media_1" autocomplete="role" autofocus>
              </div>
              <label  class="form-label"for="start_media_1">Medio de la estrella 2:</label>
              <div class="input-group input-group-outline my-3">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="start_media_2" id="start_media_2" autocomplete="role" autofocus>
              </div>
              <label class="form-label" for="square_media_1">Medio del cuadrado 1:</label>
              <div class="input-group input-group-outline my-3">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="square_media_1" id="square_media_1"o"  autocomplete="role" autofocus>
              </div>
              <label class="form-label" for="square_media_1">Medio del cuadrado 2:</label>
              <div class="input-group input-group-outline my-3">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="square_media_2" id="square_media_2"  autocomplete="role" autofocus>
              </div>
              <label class="form-label" for="rectangle_text">Texto del rectángulo:</label>
              <div class="input-group input-group-outline my-3">
                <label class="form-label"></label>
                <input type="text" class="form-control"  name="rectangle_text" id="rectangle_text"  autocomplete="role" autofocus>
              </div>
              <label class="form-label" for="rectangle_audio">Audio del rectángulo:</label>
              <div class="input-group input-group-outline my-3">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="rectangle_audio" id="rectangle_audio" autocomplete="role" autofocus>
              </div>
              


              <div class="text-center">
                <button class="btn bg-gradient-success w-100 my-4 mb-2" type="submit">Guardar</button>
              </div>
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