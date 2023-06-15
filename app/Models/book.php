<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'region_id',
        'name',
        'front_page',
        'circle_audio',
        'pencil_audio',
        'planet_image',
        'face_video',
        'eye_image',
        'tv_video',
        'message_image',
        'message_tex',
        'diamond_text',
        'diamond_image',
    ];

    public function regions()
    {

        return $this->belongsTo(Region::class, 'region_id');
    }
    public function experiences()
    {


        return $this->hasMany(Experience::class);
    }
}
