<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feed extends Model
{
    protected $fillable = ['title', 'record_name', 'display_name', 'description', 'avatar_path'];

    protected function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
