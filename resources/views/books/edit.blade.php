<form class="form" action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <label for="region_id">Región:</label>
  <div>
      <select class="form-select" name="region_id" id="region_id">
          @foreach ($regions as $region)
              <option value="{{ $region->id }}" {{ $region->id == $book->region_id ? 'selected' : '' }}>
                  {{ $region->name }}</option>
          @endforeach
      </select>
  </div>
  <br>

  <label>Portada:</label>
  <div class="input-group input-group-outline my-1">
      <input type="file" class="form-control" name="front_page" id="front_page">
  </div>

  <label>Nombre del libro:</label>
  <div class="input-group input-group-outline mb-3">
      <input type="text" class="form-control" name="name" id="name" value="{{ $book->name }}">
  </div>

  <label>Lápiz:</label>
  <div class="input-group input-group-outline my-1">
      <input type="text" class="form-control" name="pencil_audio" id="pencil_audio" value="{{ $book->pencil_audio }}">
  </div>

  <label>Ojo:</label>
  <div class="input-group input-group-outline my-1">
      <input type="file" class="form-control" name="eye_image" id="eye_image">
  </div>

  <label>Video del rostro:</label>
  <div class="input-group input-group-outline my-1">
      <input type="file" class="form-control" name="face_video" id="face_video">
  </div>

  <label>Video de la televisión:</label>
  <div class="input-group input-group-outline my-1">
      <input type="file" class="form-control" name="tv_video" id="tv_video">
  </div>

  <label>Imagen del diamante:</label>
  <div class="input-group input-group-outline my-1">
      <input type="file" class="form-control" name="diamond_image" id="diamond_image">
  </div>

  <label>Texto del diamante:</label>
  <div class="input-group input-group-outline my-1">
      <input type="text" class="form-control" name="diamond_text" id="diamond_text" value="{{ $book->diamond_text }}">
  </div>

  <label>Imagen del mensaje:</label>
  <div class="input-group input-group-outline my-1">
      <input type="file" class="form-control" name="message_image" id="message_image">
  </div>

  <label>Texto del mensaje:</label>
  <div class="input-group input-group-outline my-1">
      <input type="text" class="form-control" name="message_text" id="message_text" value="{{ $book->message_text }}">
  </div>

  <label>Audio del círculo:</label>
  <div class="input-group input-group-outline my-1">
      <input type="text" class="form-control" name="circle_audio" id="circle_audio" value="{{ $book->circle_audio }}">
  </div>

  <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>
