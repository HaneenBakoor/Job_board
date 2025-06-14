<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{  use HasFactory;
    use HasUuids;
    protected $fillable = ['title'];
    protected $guarded = ['id'];
    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}
