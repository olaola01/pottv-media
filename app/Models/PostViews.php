<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostViews extends Model
{
    use HasFactory;

    protected $fillable = ['ip', 'post_id'];

    public function posts(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
