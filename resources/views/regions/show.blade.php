<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style2.css')}}">

  <link rel="icon" type="image/png" href="{{asset('img/LOGO.png')}}">
  

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <title>Crazy Books</title>
</head>

<body class="hidden"  >


  <a href="">
    <div style="text-align: center;">
      <h1 style="color: aliceblue;"> {{ $region->name }} </h1>

    </div>
  </a>

  @foreach ($books as $book)
  <div class="p-3 m-4">
    <div style="width: 70px; margin-left:30%; " data-id="{{$book->id}}" class="btn-modal9">

      <img style="width: 100%; height: 100%;" src="/img/multimedia.png" data-toggle="modal">

    </div>

    <!-- MODAL ICONO MULTIMEDIA VERDE -->
    <div class="modal" id="modalgreen{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalgreen">{{$book->name}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe style="border-radius:12px" src="{{$book->circle_audio}}" width="100%" height="auto" frameBorder="0"
              allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
              loading="lazy"></iframe>
          </div>

        </div>
      </div>
    </div>
    <!--MODAL FINAL ICONO MULTIMEDIA VERDE -->

    <div class="container mt-2">

      <div class="div1">
        <div data-id="{{$book->id}}" class="btn-modal" style="width: 120px; height: auto; margin-left:30%;">
          <img style="width: 100%; height: 100%; margin-left:-60%;" src="https://crazybooks.com.co{{$book->front_page}}" alt="Portada del libro">
          <div>
            
          </div>

        </div>
      </div>

      <div class="div2 m-3">
        <div class="starts">
          <div class="start">
            <a data-id="{{$book->id}}" class="btn-modal" style="color: brown">
              <img style="width: 70px" height="70px" src="/img/pencil.png" alt="Descripci贸n de la imagen"
                data-toggle="modal" data-target="#examplePencil">
            </a>
          </div>





          <!--MODAL  ICONO DE LAPIZ -->
          <div class="modal" id="modalPencil{{$book->id}}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">{{$book->name}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body image-container">
                  <img class="img-fluid py-4" src="https://crazybooks.com.co{{$book->pencil_audio}}" alt="">
                  <div style="overflow-y: auto; max-height: 200px;">
                  </div>
                  </p>
                </div>

              </div>
            </div>
          </div>
          <!-- MODAL FINAL ICONO DE LAPIZ -->




          <div class="start m-3">
            <a data-id="{{$book->id}}" class="btn-modal17" style="color: brown">
              <img style="width: 70px" height="70px" src="/img/map.png" alt="Descripci贸n de la imagen"
                data-toggle="modal" data-target="#examplePencil">
            </a>
          </div>

          <!--MODAL  ICONO DE MAPA -->
          <div class="modal" id="modalmap{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-dialog"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalmap">{{$book->name}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body image-container">

                  <div style="overflow-y: auto; max-height: 200px;">

                    <div class="modal-body">
                      <iframe style="border-radius:12px" src="{{$book->planet_image}}" width="100%" height="auto"
                        frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>
                    </div>

                  </div>

                </div>

              </div>
            </div>
          </div>
          <!-- MODAL FINAL ICONO DE MAPA -->

          <div class="start">
            <a data-id="{{$book->id}}" class="btn-modal19 m-3" style="color: brown">
              <img style="width: 70px" height="70px" src="/img/happy.png" alt="Descripci贸n de la imagen"
                data-toggle="modal" data-target="#examplePencil">
            </a>
          </div>
          <!--MODAL  ICONO DE CARA FELIZ -->
          <div class="modal" id="modalface{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-dialog"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalface">{{$book->name}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <iframe width="100%" height="250px" src="{{$book->face_video}}" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                </div>

              </div>
            </div>
          </div>



        </div>
        <div class="starts">

          <div data-id="{{$book->id}}" class="btn-modal2 " style="margin-left: 30%">


            <img style="width: 140px;" height="aito" src="/img/Eye.png" alt="Descripci贸n de la imagen">


          </div>
          <!--MODAL  ICONO DE OJO -->
          <div class="modal" id="modaleye{{$book->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modaleye">{{$book->name}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body image-container">
                  <img class="img-fluid py-4" height="aito" src="https://crazybooks.com.co{{$book->eye_image}}" alt="Descripci贸n de la imagen">
                </div>

              </div>
            </div>
          </div>
          <!-- MODAL FINAL ICONO DE OJO -->


          <div data-id="{{$book->id}}" class="btn-modal3">

            <img style="width: 140PX;" height="auto" src="/img/Videomedia.png" alt="Descripci贸n de la imagen">


          </div>

          <!--MODAL  ICONO DE TV -->
          <div class="modal" id="modaltv{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-dialog"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modaltv">{{$book->name}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <iframe width="100%" height="250px" src="{{$book->tv_video}}" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                </div>

              </div>
            </div>
          </div>
          <!-- MODAL FINAL ICONO DE TV -->
        </div>
      </div>

    </div>
  </div>
  <div class="" style="display: flex;  ">
    <div class="start3" style="margin-left: 20%">

      
      <div class="start2" style="">

        <img data-id="{{$book->id}}" class="btn-modal4" style="width: 90px;" height="auto" src="/img/diamante.png"
          alt="Descripci贸n de la imagen">

      </div>
      
      <!--MODAL  ICONO DE DIAMANTE -->
      <div class="modal" id="modaldiamond{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-dialog"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modaldiamond">{{$book->name}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body image-container">
              <img class="img-fluid py-4" src="{{$book->diamond_image}}" alt="">
              <div style="overflow-y: auto; max-height: 200px;">
                <p>
                  {{$book->diamond_text}}
              </div>
              </p>
            </div>

          </div>
        </div>
      </div>
      <!-- MODAL FINAL ICONO DE DIAMANTE -->

    </div>
    <a href="/evidence-create" class="mx-7">   
      <div class="start2" style="">
    
     <img style="width: 90px; " height="auto" src="/img/estrella.png"
       alt="Descripci贸n de la imagen">
   </div></a>

    <div class="start2" style="">

      <img data-id="{{$book->id}}" class="btn-modal5" style="width: 90px;" height="auto" src="/img/globo_de_texto.png"
        alt="Descripci贸n de la imagen">

    </div>
    <!--MODAL  ICONO DE GLOBO DE TEXTO -->
    <div class="modal" id="modalmessage{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-dialog"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalmessage">{{$book->name}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body image-container">
            <img class="img-fluid py-4" src="{{$book->message_image}}" alt="">
            <div style="overflow-y: auto; max-height: 200px;">
              <p>
                {{$book->message_tex}}
            </div>
            </p>
          </div>

        </div>
      </div>
    </div>
    <!-- MODAL FINAL ICONO DE GLOBO DE TEXTO -->

  </div>

  </div>
























  @endforeach



</body>




<script>
  $(document).ready(function() { 
  $('.btn-modal').on('click', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $('#modalPencil' + id).css('display', 'block');

  });

  $('.close').on('click', function() { 
    $(this).closest('.modal').css('display', 'none');
  });
}); 


</script>
<script>
  $(document).ready(function() { 
  $('.btn-modal3').on('click', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $('#modaltv' + id).css('display', 'block');

  });

  $('.close').on('click', function() { 
    $(this).closest('.modal').css('display', 'none');
  });
}); 
</script>
<script>
  $(document).ready(function() { 
  $('.btn-modal2').on('click', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $('#modaleye' + id).css('display', 'block');

  });

  $('.close').on('click', function() { 
    $(this).closest('.modal').css('display', 'none');
  });
}); 
</script>

<script>
  $(document).ready(function() { 
  $('.btn-modal4').on('click', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $('#modaldiamond' + id).css('display', 'block');

  });

  $('.close').on('click', function() { 
    $(this).closest('.modal').css('display', 'none');
  });
}); 
</script>
<script>
  $(document).ready(function() { 
  $('.btn-modal5').on('click', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $('#modalmessage' + id).css('display', 'block');

  });

  $('.close').on('click', function() { 
    $(this).closest('.modal').css('display', 'none');
  });
}); 
</script>


<script>
  $(document).ready(function() { 
  $('.btn-modal9').on('click', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $('#modalgreen' + id).css('display', 'block');

  });

  $('.close').on('click', function() { 
    $(this).closest('.modal').css('display', 'none');
  });
}); 
</script>
<script>
  $(document).ready(function() { 
  $('.btn-modal17').on('click', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $('#modalmap' + id).css('display', 'block');

  });

  $('.close').on('click', function() { 
    $(this).closest('.modal').css('display', 'none');
  });
}); 
</script>
<script>
  $(document).ready(function() { 
  $('.btn-modal19').on('click', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $('#modalface' + id).css('display', 'block');

  });

  $('.close').on('click', function() { 
    $(this).closest('.modal').css('display', 'none');
  });
}); 
</script>

<script>



</html>