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
              <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Editar región</h4>
              <div class="row mt-3">

            </div>
          </div>
          <div class="card-body">
            
              <form class="form" class="text-start" action="{{ route('regions.update',$region)}}" method="POST">
                @csrf
                @method('PUT')
              <div class="input-group input-group-outline my-3">
                <label class="form-label"></label >
                <input type="text" class="form-control" name="name" value="{{$region->name}}" autocomplete="name" autofocus>
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="blog_url" value="{{$region->blog_url}}" autocomplete="blog_url" autofocus>
              </div>

              <div class="text-center">
                <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-2">Editar</button>
              </div>
              <p class="mt-4 text-sm text-center">
                
                
              </p>
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