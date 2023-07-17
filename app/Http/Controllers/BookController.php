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
         $book->save();
     
        
        /*
         $attachmentFields = [
             'front_page' => 'front_page',
             'eye_image' => 'eye_image',
             'diamond_image' => 'diamond_image',
             'message_image' => 'message_image',
             'pencil_audio' => 'pencil_audio',
         ];
         */
        
         
             if ($request->hasFile('front_page')) {
                 $pathName = sprintf('front_page/%s.png',   $book->id);
                 Storage::disk('public')->put($pathName, file_get_contents($request->file('front_page')));
                 
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
                                     Storage::path('public\front_page\\' . $book->id . '.png')
                                 ),
                                 'r'
                             )
                         ],
                         [
                            'name' => 'path',
                            'contents' => 'front_page'
                         ]
                     ]
                 ]);
     
                 $book->front_page = '/storage/front_page/' .  $book->id . '.png';
                 //$book->{$field} = $imagePath;
                 $book->save();
                }
             
                if ($request->hasFile('eye_image')) {
                    $pathName = sprintf('eye_image/%s.png', $book->id);
                    Storage::disk('public')->put($pathName, file_get_contents($request->file('eye_image')));
                    
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
                                        Storage::path('public\eye_image\\' . $book->id . '.png')
                                    ),
                                    'r'
                                )
                            ],
                            [
                               'name' => 'path',
                               'contents' => 'eye_image'
                            ]
                        ]
                    ]);
        
                    $book->eye_image = '/storage/eye_image/' .  $book->id . '.png';
                    //$book->{$field} = $imagePath;
                    $book->save();
                   }

                   if ($request->hasFile('diamond_image')) {
                    $pathName = sprintf('diamond_image/%s.png', $book->id);
                    Storage::disk('public')->put($pathName, file_get_contents($request->file('diamond_image')));
                    
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
                                        Storage::path('public\diamond_image\\' . $book->id . '.png')
                                    ),
                                    'r'
                                )
                            ],
                            [
                               'name' => 'path',
                               'contents' => 'diamond_image'
                            ]
                        ]
                    ]);
        
                    $book->diamond_image = '/storage/diamond_image/' .  $book->id . '.png';
                    //$book->{$field} = $imagePath;
                    $book->save();
                   }

                   if ($request->hasFile('message_image')) {
                    $pathName = sprintf('message_image/%s.png', $book->id);
                    Storage::disk('public')->put($pathName, file_get_contents($request->file('message_image')));
                    
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
                                        Storage::path('public\message_image\\' . $book->id . '.png')
                                    ),
                                    'r'
                                )
                            ],
                            [
                               'name' => 'path',
                               'contents' => 'message_image'
                            ]
                        ]
                    ]);
        
                    $book->message_image = '/storage/message_image/' .  $book->id . '.png';
                    //$book->{$field} = $imagePath;
                    $book->save();
                   }

                   if ($request->hasFile('pencil_audio')) {
                    $pathName = sprintf('pencil_audio/%s.png', $book->id);
                    Storage::disk('public')->put($pathName, file_get_contents($request->file('pencil_audio')));
                    
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
                                        Storage::path('public\pencil_audio\\' . $book->id . '.png')
                                    ),
                                    'r'
                                )
                            ],
                            [
                               'name' => 'path',
                               'contents' => 'pencil_audio'
                            ]
                        ]
                    ]);
        
                    $book->pencil_audio = '/storage/pencil_audio/' .  $book->id . '.png';
                    //$book->{$field} = $imagePath;
                    $book->save();
                   }
        
     
         //return back();
     
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
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $regions = Region::all(); // Obtener todas las regiones disponibles
        
        return view('books.edit', compact('book', 'regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */

     public function update(Request $request, $id)
{
    // Validar los datos del formulario si es necesario
    $book = Book::findOrFail($id);
    $book->region_id = $request->region_id;
    $book->planet_image = $request->input('planet_image');
    $book->name = $request->input('name');
    $book->message_tex = $request->input('message_tex');
    $book->diamond_text = $request->input('diamond_text');
    $book->circle_audio = $request->input('circle_audio');
    $book->tv_video = $request->input('tv_video');
    $book->face_video = $request->input('face_video');

    if ($request->hasFile('front_page')) {
        $pathName = sprintf('front_page/%s.png', $book->id);
        Storage::disk('public')->put($pathName, file_get_contents($request->file('front_page')));

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
                            Storage::path('public\front_page\\' . $book->id . '.png')
                        ),
                        'r'
                    )
                ],
                [
                    'name' => 'path',
                    'contents' => 'front_page'
                ]
            ]
        ]);

        $book->front_page = '/storage/front_page/' .  $book->id . '.png';
    }

    if ($request->hasFile('eye_image')) {
        $pathName = sprintf('eye_image/%s.png', $book->id);
        Storage::disk('public')->put($pathName, file_get_contents($request->file('eye_image')));

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
                            Storage::path('public\eye_image\\' . $book->id . '.png')
                        ),
                        'r'
                    )
                ],
                [
                    'name' => 'path',
                    'contents' => 'eye_image'
                ]
            ]
        ]);

        $book->eye_image = '/storage/eye_image/' .  $book->id . '.png';
    }

    if ($request->hasFile('pencil_audio')) {
        $pathName = sprintf('pencil_audio/%s.png', $book->id);
        Storage::disk('public')->put($pathName, file_get_contents($request->file('pencil_audio')));

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
                            Storage::path('public\pencil_audio\\' . $book->id . '.png')
                        ),
                        'r'
                    )
                ],
                [
                    'name' => 'path',
                    'contents' => 'pencil_audio'
                ]
            ]
        ]);

        $book->pencil_audio = '/storage/pencil_audio/' .  $book->id . '.png';
    }

    if ($request->hasFile('diamond_image')) {
        $pathName = sprintf('diamond_image/%s.png', $book->id);
        Storage::disk('public')->put($pathName, file_get_contents($request->file('diamond_image')));

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
                            Storage::path('public\diamond_image\\' . $book->id . '.png')
                        ),
                        'r'
                    )
                ],
                [
                    'name' => 'path',
                    'contents' => 'diamond_image'
                ]
            ]
        ]);

        $book->diamond_image = '/storage/diamond_image/' .  $book->id . '.png';
    }

    if ($request->hasFile('message_image')) {
        $pathName = sprintf('message_image/%s.png', $book->id);
        Storage::disk('public')->put($pathName, file_get_contents($request->file('message_image')));

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
                            Storage::path('public\message_image\\' . $book->id . '.png')
                        ),
                        'r'
                    )
                ],
                [
                    'name' => 'path',
                    'contents' => 'message_image'
                ]
            ]
        ]);

        $book->message_image = '/storage/message_image/' .  $book->id . '.png';
    }

    // Guardar los cambios en la base de datos
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
