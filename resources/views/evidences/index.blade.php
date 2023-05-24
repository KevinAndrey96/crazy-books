@extends('layouts.dashboard')
@section('navbar')
<table>
  <thead>
    <tr>
      <th class="pt-5 pb-5 ps-4"><h3>Evidencias</h3></th>
    </tr>
  </thead>
  <tbody>
    @forelse ($evidences as $evidence)
      <tr>
        <td class="p-4">
          @if ($evidence->user_id === Auth::id())
            @if (!is_null($evidence->attachment_media_url))
            <div class="card" style="max-width: 100%; min-width: 100%;">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3"></h6>
                  <p class="mb-0 text-white ps-3">
                    <h4 style="margin: 2%">{{$evidence->user->name}}</h4>
                  </p>
                </div>
                <img style="width: 80%; margin-top:7%;" class="img-fluid" src="https://crazybooks.com.co{{$evidence->attachment_media_url}}">
              </div>
              <div class="card-body p-3">
                <h4>Estudiante: {{$evidence->student_name}}</h4>
                <h4>Curso: {{$evidence->class_room}}</h4>
                <!-- Botones de editar y eliminar solo para el usuario actual -->
              </div>
            </div>
            <br><br>
            @endif
          @endif
        </td>
      </tr>
    @empty
        <p>No hay envidencia que mostar</p>
    @endforelse
        
    
  </tbody>

</table>
@endsection