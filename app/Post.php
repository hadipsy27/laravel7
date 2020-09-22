<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = ['title', 'slug', 'body', 'category_id', 'thumbnail'];
  protected $with = ['author', 'tags', 'category'];

  // singular
  public function category()
  {
    // return $this->hasOne(Category::class);
    return $this->belongsTo(Category::class);
  }

  public function getTakeImageAttribute()
  {
    // jadikan prefix di /storage nya
    return "/storage/". $this->thumbnail;
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
