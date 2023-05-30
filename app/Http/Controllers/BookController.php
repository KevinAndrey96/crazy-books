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
        return view('books.index',compact('books','regions'));
        
        return view('books.index',compact('books'));
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
        $data = $request->validate([

            'region_id' => 'required',
            'front_page' => 'required',
            'name' => 'required',
            'circle_audio' => 'required',
            'triangle_text' => 'required',
            'triangle_audio' => 'required',
            'start_media_1' => 'required',
            'start_media_2' => 'required',
            'square_media_1' => 'required',
            'square_media_2' => 'required',
            'rectangle_text' => 'required',
            'rectangle_audio' => 'required',

            
        ]);

        // Crea un nuevo libro con los datos del formulario
        $book = Book::create($data);

        // Redirecciona a la página de visualización del libro recién creado
        return redirect()->route('books.index', $book->id);
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
        $evidences = Evidence::where([["book_id", $bookID],["user_id", Auth::id()]])->get();
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
        $region = Region::all();
        return view('books.edit',compact('book', 'region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book, Region $region)
    {
        $book->update($request->all());
        $region->update($request->all());

        

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

        // Eliminar las experiencias relacionadas
        $book->experiences()->delete();

        // Eliminar el libro
        $book->delete();

        return redirect()->route('books.index');
    }
}
