<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Feed extends Model
{
    protected $fillable = ['record_name', 'display_name', 'description', 'avatar_path'];

    protected function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
