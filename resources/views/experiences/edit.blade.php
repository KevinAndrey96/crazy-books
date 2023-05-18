<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crazy Books</title>
</head>
<body>
    <!-- Vista "create.blade.php" -->
<form action="{{ route('experiences.store') }}" method="POST">
    @csrf
    <label for="user_id">Usuario:</label>
    <select name="user_id" id="user_id">
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <br>
    <label for="book_id">Libro:</label>
    <select name="book_id" id="book_id">
        @foreach ($books as $book)
            <option value="{{ $book->id }}">{{ $book->title }}</option>
        @endforeach
    </select>
    <br>
    <label for="content">Comentario:</label>
    <textarea name="content" id="content" rows="4"></textarea>
    <br>
    <button type="submit">Crear Comentario</button>
</form>

<!-- Vista "index.blade.php" -->
<!-- Vista: index.blade.php -->

<h1>List of Books</h1>

@foreach($experiences as $experience)

    <h2>{{ $experience->book->title }}</h2>
    <p>Author: {{ $experience->book->author }}</p>

    <h3>Experiences:</h3>

    @foreach($experience->book->experiences as $comment)

        <div>

            <p>{{ $comment->content }}</p>
            <p>Written by: {{ $comment->user->name }}</p>
            <p>Created at: {{ $comment->created_at }}</p>

            @if($comment->user_id === Auth::id())
                <!-- Botones de editar y eliminar solo para el usuario actual -->
                <button>Edit</button>
                <button>Delete</button>
            @endif

        </div>

    @endforeach

    <!-- Formulario para agregar un nuevo comentario -->
    <form method="POST" action="{{ route('experiences.store', $experience->book->id) }}">
        @csrf
        <textarea name="content" placeholder="Write your experience"></textarea>
        <button type="submit">Submit</button>
    </form>

@endforeach

</body>
</html>