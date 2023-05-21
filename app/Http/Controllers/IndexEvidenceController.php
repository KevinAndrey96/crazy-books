<?php

namespace App\Http\Controllers;

use App\Models\Evidence;
use Illuminate\Http\Request;

class IndexEvidenceController extends Controller
{
    public function index()
    {
        $evidences = Evidence::all();

        return view('evidences.index', compact('evidences'));
    }
}
