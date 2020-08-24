<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKomentar extends Model
{
    //
    
    
    protected $table = 'komentar';
    protected $fillable = ['video_id','nomorinduk','body'];

}