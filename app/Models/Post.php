<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 protected $fillable=['title','body','published'];
 protected $guardred=['id'];

 public function comments(){
    return $this->hasMany(Comment::class);
 }
  public function tags(){
    return $this->belongsToMany(Comment::class);
 }

}
