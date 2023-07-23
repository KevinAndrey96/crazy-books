
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('img/LOGO.png')}}">
  <title>
      Crazy Books
  </title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('/css/material-dashboard.css?v=3.1.0')}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<body>
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
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Editar</h4>
                <div class="row mt-3">
            </div>
        </div>
    </div>
<div class="card-body">
<form class="form" action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
<form action="{{ route('books.update', ['id' => $book->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="region_id">Región:</label>
    <div>
        <select class="form-select" name="region_id" id="region_id">
            @foreach ($regions as $region)
            <option value="{{ $region->id }}">{{ $region->name }}</option>
            @endforeach
        </select>
    </div>
    <br>

    <label>Portada:</label>
    <div class="input-group input-group-outline my-1">
        <input type="file" class="form-control" name="front_page" id="front_page"  value="{{$book->front_page}}" ">
    </div>

    <label>Nombre del libro:</label>
    <div class="input-group input-group-outline mb-3">
        <input type="text" class="form-control" name="name" id="name" required  value="{{$book->name}}" >
    </div>

    <label>Lápiz:</label>
    <div class="input-group input-group-outline my-1">
        <input type="file" class="form-control" name="pencil_audio" id="pencil_audio"   value="{{$book->pencil_audio}}" >
    </div>

    <label>Ojo:</label>
    <div class="input-group input-group-outline my-1">
        <input type="file" class="form-control" name="eye_image" id="eye_image"   value="{{$book->eye_image}}" >
    </div>

    <label>Emoji de cara sonriente:</label>
    <div class="input-group input-group-outline my-1">
        <input type="text" class="form-control" name="face_video" id="face_video" required  value="{{$book->face_video}}" >
    </div>

    <label>TV:</label>
    <div class="input-group input-group-outline my-1">
        <input type="text" class="form-control" name="tv_video" id="tv_video" required  value="{{$book->tv_video}}" >
    </div>

    <label>Imagen diamante:</label>
    <div class="input-group input-group-outline my-1">
        <input type="file" class="form-control" name="diamond_image" id="diamond_image"   value="{{$book->diamond_image}}" >
    </div>

    <label>Audio del planeta:</label>
    <div class="input-group input-group-outline my-1">
        <input type="tex" class="form-control" name="planet_image" id="planet_image" required  value="{{$book->planet_image}}" >
    </div>

    <label>Texto diamante:</label>
    <div class="input-group input-group-outline my-1">
        <input type="text" class="form-control" name="diamond_text" id="diamond_text" required  value="{{$book->diamond_text}}" >
    </div>

    <label>Globo de texto:</label>
    <div class="input-group input-group-outline my-1">
        <input type="text" class="form-control" name="message_tex" id="message_image" required  value="{{$book->message_tex}}">
    </div>

    <label>Globo de texto imagen:</label>
    <div class="input-group input-group-outline my-1" required>
        <input type="file" class="form-control" name="message_image" id="message_tex" value="{{$book->message_image}}"  >
    </div>

    <label>Audio del rectángulo:</label>
    <div class="input-group input-group-outline my-1">
        <input type="text" class="form-control" name="circle_audio" id="circle_audio" value="{{$book->circle_audio}}" >
    </div>

    <div class="text-center">
        <button class="btn bg-gradient-success w-100 my-4 mb-2" type="submit">Guardar</button>
    </div>
</form>

<div class="text-center">
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


</body>
</html>
