<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // plular
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
