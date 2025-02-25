<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Publisher extends Model
{
    protected $fillable = ['feed_gen_publisher_did', 'handle', 'password'];

    public function feeds(): HasMany
    {
        return $this->hasMany(Feed::class);
    }
}
