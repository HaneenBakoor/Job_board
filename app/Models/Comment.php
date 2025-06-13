<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $fillable = ['auther', 'content'];
    protected $gaurded = ['id'];
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
