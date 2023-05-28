<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Evidence;
use Illuminate\Http\Request;


class IndexEvidenceController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $evidences = Evidence::all();

        return view('evidences.index', compact('evidences', 'books'));
    }
}
