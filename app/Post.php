<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $appends = ['img'];

    protected $fillable =['titulo','extracto','cuerpo','imagen','user_id'];

    public function getImgAttribute()
    {
        return asset('storage/posts/'.$this->imagen);
    }

    public function scopeDelUser($query,$user)
    {
        return $query->where('user_id',$user);
    }
}
