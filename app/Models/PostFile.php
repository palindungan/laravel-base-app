<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostFile extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'post_id',
        'file_path',
    ];
}
