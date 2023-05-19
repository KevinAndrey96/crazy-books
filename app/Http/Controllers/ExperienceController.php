<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{


    public function index()
    {
        $experiences = Experience::with('book', 'user')->get();
        $users = User::all();
        $books = Book::all();  // Recupera todos los usuarios
        return view('experiences.index', compact('experiences', 'users','books'));
    
    }

    public function create()
    {
        $users = User::all();
        $books = Book::all();
        return view('experiences.create', compact('users', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'book_id' => 'required|exists:books,id',
        ]);

        $experience = new Experience();
        $experience->content = $request->input('content');
        $experience->user_id = auth()->user()->id;
        $experience->book_id = $request->input('book_id');
        $experience->save();

        return redirect()->route('experiences.index');
    }

    public function edit(Experience $experience)
    {
        // Verifica que el usuario logado sea el propietario de la experiencia
        if (auth()->user()->id !== $experience->user_id) {
            abort(403); // Acceso no autorizado
        }

        $users = User::all();
        $books = Book::all();
        return view('experiences.edit', compact('experience', 'users', 'books'));
    }

    public function update(Request $request, Experience $experience)
    {
        // Verifica que el usuario logado sea el propietario de la experiencia
        if (auth()->user()->id !== $experience->user_id) {
            abort(403); // Acceso no autorizado
        }

        $request->validate([
            'content' => 'required',
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
        ]);

        $experience->content = $request->input('content');
        $experience->user_id = $request->input('user_id');
        $experience->book_id = $request->input('book_id');
        $experience->save();

        return redirect()->route('experiences.index');
    }

    public function destroy(Experience $experience)
    {
        // Verifica que el usuario logado sea el propietario de la experiencia
        if (auth()->user()->id !== $experience->user_id) {
            abort(403); // Acceso no autorizado
        }

        $experience->delete();
        return redirect()->route('experiences.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        $experiences = $book->experiences;
        return view('experiences.show', compact('book', 'experiences'));
    }
}
