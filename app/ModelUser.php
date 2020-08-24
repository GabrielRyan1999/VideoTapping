<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    //
    protected $table = 'users';
    protected $fillable = ['avatar','email'];

      public function likes()
{
    return $this->belongsToMany('App\ModelVideo', 'likes', 'video_id', 'nomorinduk');
}
}