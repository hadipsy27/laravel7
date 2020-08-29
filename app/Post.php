<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = ['title', 'slug', 'body'];

  // singular
  public function category()
  {
    // return $this->hasOne(Category::class);
    return $this->belongsTo(Category::class);
  }
}
