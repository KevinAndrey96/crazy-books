<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

    <header class="text-center">
        <h1 style="color: aliceblue;"> {{ $region->name }} </h1>
    </header>

    <main class="p-3">
        @foreach ($books as $book)
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card border-0">
                        <div class="text-center">
                            <img class="img-fluid mb-3" width="80" src="/img/multimedia.png" data-toggle="modal"
                                data-target="#exampleModal">
                        </div>
                        <img class="img-fluid" width="500" src="{{$book->front_page}}" alt="libro-infantil">

                        <div class="d-flex justify-content-center mt-3">
                            <img class="img-fluid ps-2" width="80"src="/img/diamante.png"
                                alt="Descripci贸n de la imagen" data-toggle="modal" data-target="#exampleModal">

                            <img class="img-fluid ps-2" width="80" src="/img/globo_de_texto.png"
                                alt="Descripci贸n de la imagen" data-toggle="modal" data-target="#exampleModal">
                        </div>


                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex" style="margin-top:100px;">
                        <a href="{{$book->front_page}}"><img class="img-fluid ps-2" width="40" src="/img/pencil.png" alt="Descripci贸n de la imagen"
                            data-toggle="modal" data-target="#exampleText">
                        </a>

                        <img class="img-fluid ps-3" width="40" src="/img/map.png" alt="Descripci贸n de la imagen"
                            data-toggle="modal" data-target="#exampleModal">

                        <img class="img-fluid ps-2" width="40" src="/img/happy.png" alt="Descripci贸n de la imagen"
                            data-toggle="modal" data-target="#exampleModal">
                    </div>

                    <div>
                        <img class="img-fluid" width="80" src="/img/Eye.png" alt="Descripción de la imagen"
                            data-toggle="modal" data-target="#exampleModal">

                    </div>
                    <div>
                        <img class="img-fluid" width="80" src="/img/Videomedia.png" alt="Descripción de la imagen"
                            data-toggle="modal" data-target="#exampleModal">
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </main>

</body>

</html>