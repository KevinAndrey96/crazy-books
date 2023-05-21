<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evidence;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;

class StoreEvidenceController extends Controller
{
   public function store(Request $request){
      $evidence = new Evidence();
      $evidence->user_id = 1;
      $evidence->student_name = $request->input('student_name');
      $evidence->class_room = $request->input('class_room');
      $evidence->attachment_media_url = '';
      $evidence->save();

      $attachment = $request->file('attachment_media');

      if (isset($attachment))
      {


            $pathName = sprintf('evidences_images/%s.png',  $evidence->id);
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
                                  Storage::path('public\evidences_images\\' . $evidence->id . '.png')
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
              $evidence->attachment_media_url = '/storage/evidences_images/' . $evidence->id . '.png';
              $evidence->save();
              //unlink(str_replace('\\', '/', storage_path('app/public/users_images/'.$user->id.'.png')));
         }



      return back();


   }
}

