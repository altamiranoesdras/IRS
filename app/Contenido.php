<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    protected $appends = ['img'];

    protected $fillable =['titulo','extracto','cuerpo','imagen','user_id'];

    public function getImgAttribute()
    {
        $img = $this->imagen ? asset('storage/contenidos/'.$this->imagen) : asset('img/none.png');
        return $img;
    }
}
