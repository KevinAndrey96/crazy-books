<?php

namespace App\Http\Controllers;

use App\Models\Evidence;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;


class EvidenceController extends Controller
{
    public function index()
    {
        $evidences = Evidence::all();
        return view('evidences.index', compact('evidences'));
    }

    public function create()
    {

        return view('evidences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'attachment_media' => 'required|mimes:jpeg,png,mp4,mp3,txt|max:2048',
            'user_id' => 'required',
            'student_name' => 'required',
            'class_room' => 'required',
        ]);

        $attachmentPath = $request->file('attachment_media')->store('public/attachments');
        $attachment_media = asset('storage/' . $attachmentPath);

     /*   $evidence =  Evidence::create([
            'attachment_media_url' => $attachmentUrl,
            'user_id' => $request->id,
            'student_name' => $request->student_name,
            'class_room' => $request->class_room,
        ]);*/

        Evidence::created($request->all());

        return redirect()->route('evidences.index')->with('success', 'Evidence created successfully.');
    }

    public function show($id)
    {
        $users = User::all();
        $books = Book::all(); 
        $book = Book::findOrFail($id);
        $evidences = $book->evidences;
    
        return view('evidences.show', compact('book', 'users', 'evidences', 'id'));
        
    }

    public function edit(Evidence $evidence)
    {
        return view('evidences.edit', compact('evidence'));
    }

    public function update(Request $request, Evidence $evidence)
    {
        $request->validate([
            'attachment_media' => 'nullable|mimes:jpeg,png,mp4,mp3,txt|max:2048',
            'user_id' => 'required',
            'student_name' => 'required',
            'class_room' => 'required',
        ]);

        if ($request->hasFile('attachment_media')) {
            $attachmentPath = $request->file('attachment_media')->store('public/attachments');
            $attachmentUrl = asset('storage/' . $attachmentPath);
            $evidence->attachment_media_url = $attachmentUrl;
        }

        $evidence->user_id = $request->user_id;
        $evidence->student_name = $request->student_name;
        $evidence->class_room = $request->class_room;
        $evidence->save();

        return redirect()->route('evidences.index')
            ->with('success', 'Evidence updated successfully.');
    }

    public function destroy(Evidence $evidence)
    {
        $evidence->delete();

        return redirect()->route('/')
            ->with('success', 'Evidence deleted successfully.');
    }
}

