<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['title'];
    protected $guarded = ['id'];
    protected $table = 'tag';
    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}
