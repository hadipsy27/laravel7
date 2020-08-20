<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // menentukan form mana yang boleh diisi
  // protected $fillable = ['title', 'slug', 'body'];

  // guarded di pakai jika data yang di isi mempunyai scope hanya pada satu sisi(admin)
  // karena guarded memiliki keamanan yang lemah, yg bisa menambah id sesuka hait pada field database
  protected $guarded = [];
}
