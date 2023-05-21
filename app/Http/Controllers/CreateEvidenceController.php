<?php

namespace App\Http\Controllers;

use App\Models\Evidence;
use App\Models\User;
use Illuminate\Http\Request;



class CreateEvidenceController extends Controller
{
    public function create()
    {   
        $users = User::all();
        $evidences = Evidence::all();
        return view('evidences.create', compact('evidences', 'users'));
    }
}
