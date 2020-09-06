<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = ['title', 'slug', 'body', 'category_id'];

  // singular
  public function category()
  {
    // return $this->hasOne(Category::class);
    return $this->belongsTo(Category::class);
  }

  public function tags()
  {
    // relasikan ke post_tag
    // function ini di tampilkan ke show.blade.php
    return $this->belongsToMany(Tag::class);
  }

  public function author()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}
