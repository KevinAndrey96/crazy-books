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
                <div class="img_book">

                  <img style="width: 40px" height="40px" src="https://w7.pngwing.com/pngs/576/689/png-transparent-computer-icons-scalable-graphics-music-media-player-music-player-sign-media-player-sound.png" alt="Descripción de la imagen" data-toggle="modal" data-target="#exampleModal">
      
                </div>
               </div>
               <div class="start">
                <img style="width: 40px" height="40px" src="https://e7.pngegg.com/pngimages/234/543/png-clipart-pencil-drawing-a-of-a-pencil-angle-pencil.png" alt="Descripción de la imagen" data-toggle="modal" data-target="#exampleText">
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
                
                <img style="width: 40px" height="40px" src="https://depor.com/resizer/zOBaUfkuWvg2PYWsF6NP7oEJdr8=/1200x900/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/SUURJEP6QBEYNNKLOFCRVK3LXQ.jpg" alt="Descripción de la imagen" data-toggle="modal" data-target="#exampleModal">
               </div>
               <div class="start">
                <img style="width: 40px" height="40px" src="https://w7.pngwing.com/pngs/576/689/png-transparent-computer-icons-scalable-graphics-music-media-player-music-player-sign-media-player-sound.png" alt="Descripción de la imagen" data-toggle="modal" data-target="#exampleModal">
               </div>
            </div>

            <div class="starts">
                <div class="start2">
                 
                </div>
                <div class="start2">
                 
                </div>
            </div>
            <a href="https://m.youtube.com/watch?v=SrvKADxxsqg&pp=ygUaaGltbm8gbmFjaW9uYWwgZGUgY29sb21iaWE%3D">
                <div class="starts">
                    <div class="start3">
                     
                    </div>
                </div>
            </a>

            

            


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
