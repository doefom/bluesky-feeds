<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = ['feed_id', 'uri', 'cid'];

    public function feed(): BelongsTo
    {
        return $this->belongsTo(Feed::class);
    }
}
