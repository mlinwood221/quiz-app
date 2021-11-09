<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    public function getImageS3Attribute()
    {
        return env('AWS_LINK_PREFIX') . $this->image;
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class, 'author_id', 'id');
    }
}
