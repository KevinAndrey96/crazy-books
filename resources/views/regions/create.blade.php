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
              <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Formulario para registrar una región</h4>
              <div class="row mt-3">

            </div>
          </div>
          <div class="card-body">
            <form role="form" class="text-start">
              <div class="input-group input-group-outline my-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control">
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Blog</label>
                <input type="text" class="form-control">
              </div>

              <div class="text-center">
                <button type="button" class="btn bg-gradient-success w-100 my-4 mb-2">Enviar</button>
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