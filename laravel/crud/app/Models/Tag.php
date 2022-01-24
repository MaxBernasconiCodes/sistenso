<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded =[]; //guarded proteje las tablas de la DB que se indiquen dentro del array
    //protected $filable = [];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
