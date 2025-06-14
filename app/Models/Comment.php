<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{ use HasUuids, HasFactory;
    protected $fillable = ['auther', 'content','post_id'];
    protected $gaurded = ['id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
