<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Crazybooks</title>
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      <!-- Font Awesome icons (free version)-->
      <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="/cssB/styles.css" rel="stylesheet" />
   </head>
   <body class="w-100" id="page-top">
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
         <div class="container-fluid">
            <a class="navbar-brand" href="#page-top"><img src="https://crazybooks.com.co/img/LOGO.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menú
            <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                  <li class="nav-item"><a class="nav-link" href="https://crazybooks.com.co">Mapa interactivo</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://crazybooks.com.co/regions/show/1">Alto Magdalena</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://crazybooks.com.co/regions/show/2">Amazónica</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://crazybooks.com.co/regions/show/3">Caribea</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://crazybooks.com.co/regions/show/4">Cundiboyacense</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://crazybooks.com.co/regions/show/5">Insular</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://crazybooks.com.co/regions/show/6">Noroocidental</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://crazybooks.com.co/regions/show/7">Orinoquía</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://crazybooks.com.co/regions/show/8">Pacífica</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://crazybooks.com.co/regions/show/9">Santanderes</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://crazybooks.com.co/regions/show/10">Región Suroccidental</a></li>
               </ul>
            </div>
         </div>
      </nav>
      
      
      <style>
         .masthead-heading {
         color: #5a3fc0;
         text-shadow: 2px 2px 4px #000000;
         }
      </style>
      <!-- Masthead-->
      <header class="masthead" style="background-image: url('https://i.pinimg.com/originals/d6/0e/c1/d60ec1a1b6b8b6e17dc2d014c3e1cc09.jpg');">
            <div class="container-fluid">
                <div class="w-100 container-fluid masthead-heading text-uppercase" style="font-size: calc(2em + 1vw); color: #F8DF00; text-shadow: 7px 20px 20px #3600F8;">{{ $region->name }}</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="https://crazybooks.com.co" style="background-color: #5a3fc0; color: #fff;">Volver al mapa interactivo</a>
            </div>
        </header>
      <!-- Team-->
      <section class="masthead" id="team" style="background: url('https://img2.wallspic.com/crops/8/2/3/5/25328/25328-el_espacio_exterior-ambiente-universo-objeto_astronomico-espacio-7680x4320.jpg');no-repeat center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
         <div class="container-fluid">
            <style>
            
            *{
               margin: 0;
               padding: 0;
            }
               .social-icon {
               max-height: 120px;
               min-height: 120px; /* aumentado para hacer las imágenes un poco más altas */
               min-width: 130px;
               max-width: 120px;
               display: block;
               object-fit: cover;
               border-radius: 50%;  /* Esto hace que las imágenes sean redondas */
               }
               .btn-dark {
               background-color: transparent;
               border-color: #fff; /* Cambia el color según tus necesidades */
               color: #fff; /* Cambia el color según tus necesidades */
               margin: 80px; /* Espacio entre los botones */
               }
               .btn-dark:hover {
               background-color: rgba(255, 255, 255, 0.1); /* Cambia el color según tus necesidades */
               border-color: #fff; /* Cambia el color según tus necesidades */
               color: #fff; /* Cambia el color según tus necesidades */
               }
            </style>
            <div class="row">
               <div class="">
                  
                 


                  @foreach ($books as $book)

                  
                  <!--MODAL  ICONO DE LAPIZ -->
                  <div class="modal fade" id="modalPencil{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">{{$book->name}}</h5>
                           </div>
                           <div class="modal-body image-container">
                              <div style="overflow-y: auto; max-height: 250px;">
                                 @if ($book->pencil_audio ?? false)
                                 <img class="img-fluid mx-auto d-block" src="{{ $book->pencil_audio }}" alt="Pencil audio image">
                                 @else
                                 <img class="img-fluid mx-auto d-block" width="250" src="https://crazybooks.com.co/img/LOGO.png" alt="Placeholder image">
                                 @endif
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- MODAL FINAL ICONO DE LAPIZ -->
                  <!-- MODAL ICONO MULTIMEDIA VERDE -->
                  <div class="modal fade" id="modalgreen{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="modalgreen" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="modalgreen">{{$book->name}}</h5>
                           </div>
                           <div class="modal-body">
                              <iframe class="mx-auto d-block" style="border-radius:12px" src="{{$book->circle_audio}}" width="100%" height="auto" frameBorder="0"
                                 allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                 loading="lazy"></iframe>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- MODAL FINAL ICONO MULTIMEDIA VERDE -->
                  <!--MODAL  ICONO DE MAPA -->
                  <div class="modal fade" id="modalmap{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="modalmap" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="modalmap">{{$book->name}}</h5>
                           </div>
                           <div class="modal-body image-container">
                              <div style="overflow-y: auto; max-height: 250px;">
                                 @if ($book->planet_image ?? false)
                                 <iframe class="mx-auto d-block" style="border-radius:12px" src="{{$book->planet_image}}" width="100%" height="auto"
                                    frameBorder="0" allowfullscreen=""
                                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                    loading="lazy"></iframe>
                                 @else
                                 <img class="img-fluid mx-auto d-block" width="250" src="https://crazybooks.com.co/img/LOGO.png" alt="Placeholder image">
                                 @endif
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- MODAL FINAL ICONO DE MAPAñññ-->
                  <!--MODAL  ICONO DE CARA FELIZ -->
                  <div class="modal fade" id="modalface{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="modalface" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="modalface">{{$book->name}}</h5>
                           </div>
                           <div class="modal-body">
                              @if ($book->face_video ?? false)
                              <iframe class="mx-auto d-block" width="100%" height="250px" src="{{$book->face_video}}" title="YouTube video player"
                                 frameborder="0"
                                 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                 allowfullscreen></iframe>
                              @else
                              <img class="img-fluid mx-auto d-block" width="250" src="https://crazybooks.com.co/img/LOGO.png" alt="Placeholder image">
                              @endif
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- MODAL FINAL ICONO DE CARA FELIZ -->
                  <!--MODAL  ICONO DE OJO -->
                  <div class="modal fade" id="modaleye{{$book->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="modaleye">{{$book->name}}</h5>
                           </div>
                           <div class="modal-body image-container">
                              <img class="img-fluid py-4 mx-auto d-block" height="auto" src="{{$book->eye_image}}" alt="Eye image">
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- MODAL FINAL ICONO DE OJO -->
                  <!--MODAL  ICONO DE TV -->
                  <div class="modal fade" id="modaltv{{$book->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="modaltv">{{$book->name}}</h5>
                           </div>
                           <div class="modal-body">
                              <iframe class="mx-auto d-block" width="100%" height="250px" src="{{$book->tv_video}}" title="YouTube video player"
                                 frameborder="0"
                                 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                 allowfullscreen></iframe>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- MODAL FINAL ICONO DE TV -->
                  <!--MODAL  ICONO DE DIAMANTE -->
                  <div class="modal fade" id="modaldiamond{{$book->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="modaldiamond">{{$book->name}}</h5>
                           </div>
                           <div class="modal-body">
                              <div class="image-container d-flex justify-content-center">
                                 <img class="img-fluid py-4" src="{{$book->diamond_image}}" alt="Imagen de Diamante">
                              </div>
                              <div style="overflow-y: auto; max-height: 200px;">
                                 <p class="text-center">
                                    {{$book->diamond_text}}
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- MODAL FINAL ICONO DE DIAMANTE -->
                  <!--MODAL  ICONO DE GLOBO DE TEXTO -->
                  <div class="modal fade" id="modalmessage{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-dialog" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="modalmessage">{{$book->name}}</h5>
                           </div>
                           <div class="modal-body">
                              <div class="image-container d-flex justify-content-center">
                                 <img class="img-fluid py-4" src="{{$book->message_image}}" alt="Imagen de globo de texto">
                              </div>
                              <div style="overflow-y: auto; max-height: 200px;">
                                 <p class="text-center">
                                    {{$book->message_text}}
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- MODAL FINAL ICONO DE GLOBO DE TEXTO -->
                  <div class="team-member">
                     <img class="mx-auto rounded-circle" src="{{$book->front_page}}" alt="Portada del libro {{$book->name}}" />
                     <h4 style="color: #ffffff; text-shadow: 2px 2px 4px #000000;">{{$book->name}}</h4>
                     <p class="text-muted"></p>
                     <div class="d-flex justify-content-between flex-grow-1 mt-3">
                        <a class="btn btn-dark btn-social mx-4 flex-grow-1" href="#!" data-bs-toggle="modal" data-bs-target="#modalPencil{{$book->id}}" aria-label="Abrir modal de lápiz para {{$book->name}}">
                        <img class="social-icon"  src="https://crazybooks.com.co/img/pencil.png" alt="Icono de lápiz">
                        </a>
                        <a class="btn btn-dark btn-social mx-4 flex-grow-1" href="#!" data-bs-toggle="modal" data-bs-target="#modalmap{{$book->id}}" aria-label="Abrir modal de mapa para {{$book->name}}">
                        <img class="social-icon" src="https://crazybooks.com.co/img/map.png" alt="Icono de mapa">
                        </a>
                        <a class="btn btn-dark btn-social mx-4 flex-grow-1" href="#!" data-bs-toggle="modal" data-bs-target="#modalface{{$book->id}}" aria-label="Abrir modal de cara feliz para {{$book->name}}">
                        <img class="social-icon" src="https://crazybooks.com.co/img/happy.png" alt="Icono de cara feliz">
                        </a>
                     </div>
                     <div class="d-flex justify-content-between flex-grow-1 mt-3">
                        <a class="btn btn-dark btn-social mx-4 flex-grow-1" href="#!" data-bs-toggle="modal" data-bs-target="#modalgreen{{$book->id}}" aria-label="Abrir modal de multimedia para {{$book->name}}">
                        <img class="social-icon" src="https://crazybooks.com.co/img/multimedia.png" alt="Icono de multimedia">
                        </a>
                        <a class="btn btn-dark btn-social mx-4 flex-grow-1" href="#!" data-bs-toggle="modal" data-bs-target="#modaleye{{$book->id}}" aria-label="Abrir modal de ojo para {{$book->name}}">
                        <img class="social-icon" src="https://crazybooks.com.co/img/Eye.png" alt="Icono de ojo">
                        </a>
                        <a class="btn btn-dark btn-social mx-4 flex-grow-1" href="#!" data-bs-toggle="modal" data-bs-target="#modaltv{{$book->id}}" aria-label="Abrir modal de vídeo para {{$book->name}}">
                        <img class="social-icon" src="https://crazybooks.com.co/img/Videomedia.png" alt="Icono de vídeo">
                        </a>
                     </div>
                     <div class="d-flex justify-content-between flex-grow-1 mt-3">
                        <a class="btn btn-dark btn-social mx-4 flex-grow-1" href="#!" data-bs-toggle="modal" data-bs-target="#modaldiamond{{$book->id}}" aria-label="Abrir modal de diamante para {{$book->name}}">
                        <img class="social-icon" src="https://crazybooks.com.co/img/diamante.png" alt="Icono de diamante">
                        </a>

                        <a class="btn btn-dark btn-social mx-4 flex-grow-1" href="{{ route('evidences.show', ['id' => $book->id]) }}" aria-label="Ir a crear evidencia para {{$book->name}}">
                        <img class="social-icon" src="https://crazybooks.com.co/img/estrella.png" alt="Icono de estrella">
                        </a>
                        
                        
                        
                        
                        <a class="btn btn-dark btn-social mx-4 flex-grow-1" href="#!" data-bs-toggle="modal" data-bs-target="#modalmessage{{$book->id}}" aria-label="Abrir modal de mensaje para {{$book->name}}">
                        <img class="social-icon" src="https://crazybooks.com.co/img/globo_de_texto.png" alt="Icono de globo de texto">
                        </a>
                     </div>
                  </div>
                   @endforeach
               </div>
            </div>
         </div>
      </section>
 <script>
    $(document).ready(function() { 
        // Para btn-modal
        $('.btn-modal').on('click', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $('#modalPencil' + id).css('display', 'block');
        });

        // Para btn-modal3
        $('.btn-modal3').on('click', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $('#modaltv' + id).css('display', 'block');
        });

        // Para btn-modal2
        $('.btn-modal2').on('click', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $('#modaleye' + id).css('display', 'block');
        });

        // Para btn-modal4
        $('.btn-modal4').on('click', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $('#modaldiamond' + id).css('display', 'block');
        });

        // Para btn-modal5
        $('.btn-modal5').on('click', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $('#modalmessage' + id).css('display', 'block');
        });

        // Para btn-modal9
        $('.btn-modal9').on('click', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $('#modalgreen' + id).css('display', 'block');
        });

        // Para btn-modal17
        $('.btn-modal17').on('click', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $('#modalmap' + id).css('display', 'block');
        });

        // Para btn-modal19
        $('.btn-modal19').on('click', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $('#modalface' + id).css('display', 'block');
        });

        // Para todos los botones de cierre
        $('.close').on('click', function() { 
            $(this).closest('.modal').css('display', 'none');
        });
    }); 
</script>

      <!-- Footer-->
      <footer class="footer py-4">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-lg-4 text-lg-start">Crazybooks &copy; 2023</div>
            </div>
         </div>
      </footer>
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Core theme JS-->
      <script src="/jsB/scripts.js"></script>
      <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
   </body>
</html>