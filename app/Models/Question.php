<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'quiz_id', 'id');
    }
    
    public function getImageS3Attribute()
    {
        return env('AWS_LINK_PREFIX') . $this->image;
    }
}
