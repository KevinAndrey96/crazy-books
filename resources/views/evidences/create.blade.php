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
            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Enviar evidencias de la clase</h4>
            <div class="row mt-3">
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('evidences.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group m-3">
              <label   class="form-label" for="attachment_media"></label>
              <div class="input-group input-group-outline my-3">
                
                <input type="file" class="btn btn-success" id="attachment_media" name="attachment_media" required>
              </div>
            </div>
        
                
          
            <div class="form-group mt-3">
              <label for="user_id">Selecciona un profesor:</label>
              <select class="form-select" aria-label="Default select example" name="user_id" id="user_id" class="form-control">
                <option value="">Selecciona un usuario</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name  }}</option>
                @endforeach
            </select>

            <div class="form-group mt-3">
              <label for="student_name">Nombre del estudiante:</label>
              <div class="input-group input-group-outline my-3">
                <input type="text" class="form-control" id="student_name" name="student_name" required>
              </div>
            </div>

            <div class="form-group">
              <label for="class_room">Salón de clases:</label>
              <div class="input-group input-group-outline my-3">
                <input type="text" class="form-control" id="class_room" name="class_room">
              </div>
            </div>

            <div class="text-center">
              <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-2">Eviar tarea</button>
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
