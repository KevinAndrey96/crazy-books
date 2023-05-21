@extends('layouts.dashboard')
@section('navbar')
<table>
    <thead>
        <tr>
            <th>imagen</th>
        </tr>
    </thead>
    <tbody>
        @foreach($evidences as $evidence)
        <tr>
            <td>
                
                @if (! is_null($evidence->attachment_media_url))
                <div class="card mt-4" style="max-width: 80%" >
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                      <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3"></h6>
                        <p class="mb-0 text-white ps-3">
                            
                        <h1 style="margin: 2%">{{$evidence->user->name}}</h1>
                        
                          
                        </p>
                      </div>
                      
                      <img style="width: 80%; margin-top:7%;" src="https://crazybooks.com.co{{$evidence->attachment_media_url}}">
                    </div>

                    <h4 style="margin: 2%">Estudiante: {{$evidence->student_name}}</h4>
                    <h4 style="margin: 2%">Curso: {{$evidence->class_room}}</h4>
                    <div class="card-body">
            
                      <!-- Botones de editar y eliminar solo para el usuario actual -->
            
                    </div>
                  </div>
                   <br><br>
                @endif
               
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection
