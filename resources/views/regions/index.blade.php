@extends('layouts.dashboard')
@section('navbar')

<div class="container-fluid py-4">
    <div class="content-container overflow-x-auto">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Regiones</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Region</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Blog</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Acciones</th>

                            </tr>
                            </thead>
                            @foreach ($regions as $region)
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$region->id}}</h6>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-4">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$region->name}}</h6>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-4 py-2">

                                            <div class="d-flex flex-column justify-content-center">

                                                <a type="submit"  style="font-size: 16px; padding: 5px 25px;" class="btn btn-warning mx-2" value="editar" href="{{$region->blog_url}} " target="_blank">VER REGIÓN</a>

                                            </div>
                                        </div>
                                    </td>



                                    <td class="btn btn-group">
                                        <div class="d-flex px-4 py-2">

                                            <div class="d-flex justify-content-cente">



                                                <form action="{{route('regions.destroy',$region)}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                                <a type="submit" class="btn btn-primary mx-2" value="editar" href="{{route('regions.edit',$region)}}">Editar</a>
                                                <a type="submit" class="btn btn-primary mx-2" value="ver" href="/books/region/{{$region->id}}" >Libros</a>
                                            </div>
                                        </div>
                    </div>
                    </td>


                    </tr>
                    </tbody>
                    @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
