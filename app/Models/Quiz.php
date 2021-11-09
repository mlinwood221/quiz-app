<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'quiz_id', 'id');
    }

    public function getCategoriesAttribute()
    {
        $arr_cat_ids = explode(',', $this->category_ids);
        $categories = array();
        foreach ($arr_cat_ids as $cat_id) {
            $category = Category::find($cat_id);
            if ($category) {
                array_push($categories, $category);
            }
        }
        return $categories;
    }

    public function getArrCatIdsAttribute()
    {
        return explode(',', $this->category_ids);
    }

    public function getPublicLinkAttribute()
    {
        if ($this->type == 'quiz')
            return 'quiz/' . $this->slug;
        else
            return 'wordsearch/' . $this->slug;
    }

    public function getImageS3Attribute()
    {
        return env('AWS_LINK_PREFIX') . $this->image;
    }
}
