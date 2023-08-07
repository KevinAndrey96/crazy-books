<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function regions(){
         
        return $this->belongsTo(Region::class, 'region_id');

    }

    public function experiences(){

        
    return $this->hasMany(Experience::class);


    }

    protected $fillable = [
        
        'region_id',
        'front_page',
        'name',
        'circle_audio',
        'triangle_text',
        'triangle_audio',
        'blog_url',
        'start_media_1',
        'start_media_2',
        'square_media_1',
        'square_media_2',
        'rectangle_text',
        'rectangle_audio',
        

        
    ];


}
