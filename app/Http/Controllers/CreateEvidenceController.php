<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Evidence;
use App\Models\User;
use Illuminate\Http\Request;



class CreateEvidenceController extends Controller
{
    public function create()
    {   $books = Book::all();
        $users = User::all();
        $evidences = Evidence::all();
        return view('evidences.create', compact('evidences', 'users', 'books'));
    }
}
