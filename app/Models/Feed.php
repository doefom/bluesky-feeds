<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $fillable = ['title', 'slug', 'feedgen_publisher_id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
