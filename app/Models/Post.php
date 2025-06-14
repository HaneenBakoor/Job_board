<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    use HasUuids;
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'body','auther', 'published'];
    protected $guarded = ['id'];
    protected $keyType = 'uuid';
    public $incrementing = false;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Comment::class);
    }
}
