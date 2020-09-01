<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    public function posts()
    {
        // relasi kan ke tabel post_tag
        return $this->belongsToMany(Post::class);
    }
}
