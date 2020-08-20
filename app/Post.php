<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // menentukan form mana yang boleh diisi
  protected $fillable = ['title', 'slug', 'body'];
  
}
