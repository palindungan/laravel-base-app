<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'caption',
    ];

    public function post_files()
    {
        return $this->hasMany(PostFile::class);
    }

    public function post_comments()
    {
        return $this->hasMany(PostComment::class);
    }

    public function post_likes()
    {
        return $this->hasMany(PostLike::class);
    }
}
