@extends('layouts.dashboard')
@section('navbar')

<body>
    <table class="table">

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">LIBROS</h6>
                            </div>
                        </div>

                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">

                                <a type="submit" class="btn btn-primary m-4" value="create"
                                    href="{{ route('books.create') }}">CREAR LIBRO</a>
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Region</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Acciones</th>
                                        </tr>
                                    </thead>
                                    @foreach ($books as $book)
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $book->id }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-4">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $book->regions->name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="btn btn-group">
                                                <div class="d-flex px-4 py-2">
                                                    <div class="d-flex justify-content-center">
                                                        <form action="{{ route('books.destroy', $book) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                                        </form>
                                                        <a type="submit" class="btn btn-primary mx-2" value="editar"
                                                            href="{{ route('books.edit', $book) }}">Editar</a>
                                                        <a href="{{ route('books.show', $book->id) }}"
                                                            class="btn btn-primary">Ver Foro</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <table class="table align-items-center justify-content-center mb-0">
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        @section('content')
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card">
                        <div class="card-header bg-primary text-white">{{ __('Editar Libro') }}</div>


                        <div class="card-body">
                            <form action="{{ route('books.update', $book) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="title" class="form-label">{{ __('Título') }}</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $book->title }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="author" class="form-label">{{ __('Autor') }}</label>
                                    <input type="text" class="form-control" id="author" name="author"
                                        value="{{ $book->author }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">{{ __('Descripción') }}</label>
                                    <textarea class="form-control" id="description" name="description"
                                        rows="4">{{ $book->description }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="region" class="form-label">{{ __('Región') }}</label>
                                    <select class="form-select" id="region" name="region_id" required>
                                        @foreach($regions as $region)
                                        <option value="{{ $region->id }}"
                                            {{ $region->id == $book->region_id ? 'selected' : '' }}>
                                            {{ $region->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">{{ __('Guardar cambios') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
