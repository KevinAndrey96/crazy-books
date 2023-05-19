<h1></h1>

<ul>
    
        
    
</ul>

<!DOCTYPE html>
<html lang="en">
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
<body>
    <a href="">
    <div style="text-align: center;">
        <h1 style="color: aliceblue;"> {{ $region->name }} </h1>
    </div>
    </a>
    @foreach ($books as $book)
    <div class="img_book" style="width: 80px; margin-left:30%;">

        <img style="width: 80px " height="80px" src="/img/multimedia.png" data-toggle="modal" data-target="#exampleModal">

      </div>
    <div class="container">

        <div class="div1">
          <div class="img_book">

            <img src="{{$book->front_page}}" alt="libro-infantil">

          </div>
        </div>


        <div class="div2">
            <h1></h1>

            
            <div class="starts">
               <div class="start">

               </div>
               <div class="start">
                <img style="width: 40px" height="40px" src="/img/pencil.png" alt="Descripci贸n de la imagen" data-toggle="modal" data-target="#exampleText">
              </div>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleText" tabindex="-1" role="dialog" aria-labelledby="exampleTextLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleTextLabel">{{$book->regions->name}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>{{$book->triangle_text}}</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
               <div class="start">
                
                <img style="width: 40px" height="40px" src="/img/map.png" alt="Descripci贸n de la imagen" data-toggle="modal" data-target="#exampleModal">
               </div>
               <div class="start">
                <img style="width: 40px" height="40px" src="/img/happy.png" alt="Descripci贸n de la imagen" data-toggle="modal" data-target="#exampleModal">
               </div>
            </div>

            <div class="starts" style=">
                <div class="start2">

                    <img style="width: auto;" height="aito" src="/img/Eye.png" alt="Descripci贸n de la imagen" data-toggle="modal" data-target="#exampleModal">
                 
                </div>
                <div class="start2">
                    <img style="width: auto;" height="auto" src="/img/Videomedia.png" alt="Descripci贸n de la imagen" data-toggle="modal" data-target="#exampleModal">
                </div>
            </div>


            

            

            


        </div>

        <div class="" style="display: flex;  ">
            <div class="start3" style="margin-left: 20%">

                <div class="start2" style="">
                    <img style="width: auto;" height="auto" src="/img/diamante.png" alt="Descripci贸n de la imagen" data-toggle="modal" data-target="#exampleModal">
                </div>

            </div>
            <div style="margin-left: 15%" class="start3">
                <img style="width: auto;" height="auto" src="/img/globo_de_texto.png" alt="Descripci贸n de la imagen" data-toggle="modal" data-target="#exampleModal">
            </div>
        </div>
    


    </div>
    <div class="container">

     
        
            

            


        </div>

    </div>
</body>


  
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
          <iframe width="auto" height="auto" src="{{$book->start_media_1}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
</div>




  
<div class="modal fade" id="#exampleText" tabindex="-1" role="dialog" aria-labelledby="#exampleTextLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="#exampleTextLabel">{{$book->regions->name}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
           <p>{{$book->triangle_text}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
@endforeach

<script>
  $('##exampleText').on('show.bs.modal', function () {
    $('##exampleText').modal('show')
});

</script>
</html>
