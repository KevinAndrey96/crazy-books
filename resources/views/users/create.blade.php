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
            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Crear usuarios</h4>
            <div class="row mt-3">
            </div>
          </div>
        </div>
        <div class="card-body">
          <form class="form" action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="form-group mt-3">
              <label for="name">Nombre: </label>
              <div class="input-group input-group-outline my-3">
                <input type="text" class="form-control"  name="name" id="name"  required>
              </div>
            </div>

            <div class="form-group">
              <label for="email">Email: </label>
              <div class="input-group input-group-outline my-3">
                <input  type="email" class="form-control"  name="email" id="email" required>
              </div>
            </div>
            <div class="form-group">
                <label for="password">Contraseña: </label>
                <div class="input-group input-group-outline my-3">
                  <input  type="password"  class="form-control"  name="password" id="password" required>
                </div>
              </div>
              <div class="form-group mt-3">
            <label for="rol">Selecciona un rol:</label>
            <label for="role">Selecciona un rol:</label>
            <select name="role" id="role" class="form-select">
              <option value="">Selecciona un rol</option>
              <option value="Teacher">teacher</option>
              <option value="Admin">admin</option>
            </select>
              </div>
            <div class="text-center">
              <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-2">Crear usuario</button>
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