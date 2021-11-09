<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //    
    public function getImageS3Attribute()
    {
        return env('AWS_LINK_PREFIX') . $this->image;
    }
}
