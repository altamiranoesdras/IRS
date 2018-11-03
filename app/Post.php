<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $appends = ['img'];

    public function getImgAttribute()
    {
        return asset('storage/posts/'.$this->imagen);
    }
}
