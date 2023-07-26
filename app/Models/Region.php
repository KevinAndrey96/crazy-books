<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;


    public function books(){
         
        return $this->hasMany(Book::class, 'id');

    }

    protected $fillable = [
        'name',
        'blog_url'
    ];
}
