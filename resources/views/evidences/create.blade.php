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
<br>
<br>

<div class="container my-auto">
  <div class="row">
    <div class="col-lg-4 col-md-8 col-12 mx-auto">
      <div class="card z-index-0 fadeIn3 fadeInBottom">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Enviar evidencias</h4>
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
              <label for="user_id">Selecciona un libro:</label>
              <select class="form-select" aria-label="Default select example" name="book_id" id="book_id" class="form-control">
                <option value="">Selecciona un libro:</option>
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->name  }}</option>
                @endforeach
            </select>                
          
            <div class="form-group mt-3">
              <label for="user_id">Selecciona un profesor:</label>
              <select class="form-select" aria-label="Default select example" name="user_id" id="user_id" class="form-control">
                <option value="">Selecciona un usuario</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name  }}</option>
                @endforeach
            </select>

            <div class="form-group mt-3">
              <label for="student_name">Nombre del estudiante :</label>
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
              <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-2">Enviar</button>
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