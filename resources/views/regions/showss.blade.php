
















@foreach($books as $book)
<a data-id="{{$book->id}}" class="btn-modal" style="color: brown">
  <img src="/img/pencil.png" width="30" alt="">
</a>
<h1 style="color: brown">{{$book->name}}</h1>

<!-- Modal lapis -->
<div id="modalPencil{{$book->id}}" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3>{{$book->name}}</h3>
    <p>{{$book->pencil_audio}}</p>
    <p>{{$book->message_tex}}</p>
  </div>
</div>



@endforeach

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

  $(document).ready(function() { 
  $('.btn-modal').on('click', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $('#modalPencil' + id).css('display', 'block');
    $('#modaltv' + id).css('display', 'block');
  });

  $('.close').on('click', function() { 
    $(this).closest('.modal').css('display', 'none');
  });
}); 
</script>