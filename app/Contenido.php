<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    protected $appends = ['img'];

    public function getImgAttribute()
    {
        return asset('storage/contenidos/'.$this->imagen);
    }
}
