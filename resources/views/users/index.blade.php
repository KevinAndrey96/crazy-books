@extends('layouts.dashboard')
@section('navbar')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">profesores</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Correo</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">role</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Acciones</th>

                            </tr>
                            </thead>
                            @foreach ($users as $user)
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$user->id}}</h6>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$user->name}}</h6>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-4">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$user->email}}</h6>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-4 py-2">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$user->role}}</h6>

                                            </div>
                                        </div>
                                    </td>



                                    <td class="btn btn-group">
                                        <div class="d-flex px-4 py-2">

                                            <div class="d-flex justify-content-cente">
                                             

                                                
                                                <form action="{{route('users.destroy',$user)}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="submit" class="btn btn-danger" value="Eliminar">
                                                    
                                                </form>
                                                <a type="submit" class="btn btn-primary mx-2" value="editar" href="{{route('users.edit',$user)}}">Editar</a>
                                                
                                           
                                             
                                            </div>
                                        </div>
                    </div>
                    </td>


                    </tr>
                    </tbody>
                    @endforeach
                    </table>

                    <table class="table align-items-center justify-content-center mb-0">

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection