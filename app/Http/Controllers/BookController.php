<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Evidence;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $regions = Region::all();
        $books = Book::all();
        return view('books.index', compact('books', 'regions'));

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();
        $regions = Region::all();
        return view('books.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // Validar los datos del formulario si es necesario
        $validatedData = $request->validate([
            'region_id' => 'required',
            'front_page' => 'required|image',
            'name' => 'required',
            'pencil_audio' => 'required',
            'planet_image' => 'required',
            'eye_image' => 'required|image',
            'face_video' => 'required',
            'tv_video' => 'required',
            'diamond_image' => 'required|image',
            'diamond_text' => 'required',
            'message_image' => 'required|image',
            'message_tex' => 'required',
            'circle_audio' => 'required',
        ]);

        // Obtener la ruta de almacenamiento para las imágenes
       // $imagePath = 'path/to/save/images';
        $imagePath = 'map_images';

        // Guardar la imagen de portada
        $frontPageImage = $request->file('front_page');
        $frontPageImageName = $frontPageImage->getClientOriginalName();
        $frontPageImage->move($imagePath, $frontPageImageName);

        $eyeImage = $request->file('eye_image');
        $eyeImageName = $eyeImage->getClientOriginalName();
        $eyeImage->move($imagePath, $eyeImageName);
        

        $diamondImageImage = $request->file('diamond_image');
        $diamondImageImageName = $diamondImageImage->getClientOriginalName();
        $diamondImageImage->move($imagePath, $diamondImageImageName);

        $messageImageImage = $request->file('message_image');
        $messageImageImageName = $messageImageImage->getClientOriginalName();
        $messageImageImage->move($imagePath, $messageImageImageName);
        


        
       
        // Guardar otras imágenes y archivos necesarios de la misma manera

        // Crear una nueva instancia del modelo Book y asignar los datos
        $book = new Book();
        $book->region_id = $request->region_id;
        $book->front_page = $frontPageImageName;
        $book->eye_image = $eyeImageName;
        $book->diamond_image = $diamondImageImageName;
        $book->message_image = $messageImageImage;
        $book->planet_image = $request->planet_image;
        $book->name = $request->name;
        $book->pencil_audio = $request->pencil_audio;
        $book->message_tex = $request->message_tex;
        $book->diamond_text = $request->diamond_text;
        $book->circle_audio = $request->circle_audio;
        $book->tv_video = $request->tv_video;
        $book->face_video = $request->face_video;
        
        // Asignar otros datos necesarios

        // Guardar el libro en la base de datos
        $book->save();

        // Redireccionar o hacer cualquier otra acción necesaria
        return redirect()->route('books.index');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function booksByRegionID($regionID)
    {
        $books = Book::where("region_id", $regionID)->get();
        $region = Region::find($regionID);
        return view('books.index', compact('books', 'region'));
    }

    public function evidencesByBookID($bookID)
    {
        $evidences = Evidence::where([["book_id", $bookID], ["user_id", Auth::id()]])->get();
        return view('evidences.byBooks', compact('evidences'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $books = Book::all();
        $regions = Region::all();
        return view('books.edit', compact('book', 'regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        // Validar los datos del formulario si es necesario
        $validatedData = $request->validate([
            'region_id' => 'required',
            'front_page' => 'image',
            'name' => 'required',
            'pencil_audio' => 'required',
            'planet_image' => 'required',
            'eye_image' => 'image',
            'face_video' => 'required',
            'tv_video' => 'required',
            'diamond_image' => 'image',
            'diamond_text' => 'required',
            'message_image' => 'image',
            'message_tex' => 'required',
            'circle_audio' => 'required',
        ]);
    
        // Actualizar los campos del libro con los nuevos datos
        $book->region_id = $request->region_id;
        $book->front_page = $request->file('front_page') ? $request->file('front_page')->getClientOriginalName() : $book->front_page;
        $book->name = $request->name;
        $book->pencil_audio = $request->pencil_audio;
        $book->eye_image = $request->file('eye_image') ? $request->file('eye_image')->getClientOriginalName() : $book->eye_image;
        $book->face_video = $request->face_video;
        $book->tv_video = $request->tv_video;
        $book->planet_image = $request->planet_image;
        $book->diamond_image = $request->file('diamond_image') ? $request->file('diamond_image')->getClientOriginalName() : $book->diamond_image;
        $book->diamond_text = $request->diamond_text;
        $book->message_image = $request->file('message_image') ? $request->file('message_image')->getClientOriginalName() : $book->message_image;
        $book->message_tex = $request->message_tex;
        $book->circle_audio = $request->circle_audio;
    
        $book->save();
    
        // Redireccionar o hacer cualquier otra acción necesaria
        return redirect()->route('books.index');
    }
    
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $region = Region::findOrFail($id);

        // Eliminar las experiencias relacionadas
        $book->experiences()->delete();

        // Eliminar el libro
        $book->delete();

        return redirect()->route('books.region', ['region' => $region->id]);
    }
}
