<form class="form" action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

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
        <input type="file" class="form-control" name="front_page" id="front_page" required>
    </div>

    <label>Nombre del libro:</label>
    <div class="input-group input-group-outline mb-3">
        <input type="text" class="form-control" name="name" id="name" required>
    </div>

    <label>Lápiz:</label>
    <div class="input-group input-group-outline my-1">
        <input type="file" class="form-control" name="pencil_audio" id="pencil_audio" required>
    </div>

    <label>Ojo:</label>
    <div class="input-group input-group-outline my-1">
        <input type="file" class="form-control" name="eye_image" id="eye_image" required>
    </div>

    <label>Emoji de cara sonriente:</label>
    <div class="input-group input-group-outline my-1">
        <input type="text" class="form-control" name="face_video" id="face_video" required>
    </div>

    <label>TV:</label>
    <div class="input-group input-group-outline my-1">
        <input type="text" class="form-control" name="tv_video" id="tv_video" required>
    </div>

    <label>Imagen diamante:</label>
    <div class="input-group input-group-outline my-1">
        <input type="file" class="form-control" name="diamond_image" id="diamond_image" required>
    </div>

    <label>Audio del planeta:</label>
    <div class="input-group input-group-outline my-1">
        <input type="tex" class="form-control" name="planet_image" id="planet_image" required>
    </div>

    <label>Texto diamante:</label>
    <div class="input-group input-group-outline my-1">
        <input type="text" class="form-control" name="diamond_text" id="diamond_text" required>
    </div>

    <label>Globo de texto:</label>
    <div class="input-group input-group-outline my-1">
        <input type="text" class="form-control" name="message_tex" id="message_image" required>
    </div>

    <label>Globo de texto imagen:</label>
    <div class="input-group input-group-outline my-1" required>
        <input type="file" class="form-control" name="message_image" id="message_tex" >
    </div>

    <label>Audio del rectángulo:</label>
    <div class="input-group input-group-outline my-1">
        <input type="text" class="form-control" name="circle_audio" id="circle_audio">
    </div>

    <div class="text-center">
        <button class="btn bg-gradient-success w-100 my-4 mb-2" type="submit">Guardar</button>
    </div>
</form>
