<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function scoopeLatesFirst(){
    // php artisan tinker, lalu
    // Post::latest->first();
    //--------------------------
    return $this->latest()->first();
  }
}
