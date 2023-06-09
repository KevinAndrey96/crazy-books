<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Evidence;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;

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
     
         $book = new Book();
         $book->region_id = $request->region_id;
         $book->front_page = '';
         $book->eye_image = '';
         $book->diamond_image = '';
         $book->message_image = '';
         $book->planet_image = $request->input('planet_image');
         $book->name = $request->input('name');
         $book->pencil_audio = '';
         $book->message_tex = $request->input('message_tex');
         $book->diamond_text = $request->input('diamond_text');
         $book->circle_audio = $request->input('circle_audio');
         $book->tv_video = $request->input('tv_video');
         $book->face_video = $request->input('face_video');
     
        
     
         $attachmentFields = [
             'front_page' => 'front_page',
             'eye_image' => 'eye_image',
             'diamond_image' => 'diamond_image',
             'message_image' => 'message_image',
             'pencil_audio' => 'pencil_audio',
         ];
         
         foreach ($attachmentFields as $field => $fieldName) {
             $attachment = $request->file($fieldName);
     
             if (isset($attachment)) {
                 $pathName = sprintf('evidences_images/%s.png',   $attachment);
                 Storage::disk('public')->put($pathName, file_get_contents($attachment));
                 
                 $client = new Client();
                 $url = "https://crazybooks.com.co/upload.php";
                 $client->request('post', $url, [
                     'multipart' => [
                         [
                             'name' => 'image',
                             'contents' => fopen(
                                 str_replace(
                                     '\\',
                                     '/',
                                     Storage::path('public\evidences_images\\' . $attachment . '.png')
                                 ),
                                 'r'
                             )
                         ],
                         [
                            'name' => 'path',
                            'contents' => 'evidences_images'
                         ]
                     ]
                 ]);
     
                 $imagePath = '/storage/evidences_images/' .  $attachment . '.png';
                 $book->{$field} = $imagePath;
             }
         }
     
         $book->save();
     
         return back();
     
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
