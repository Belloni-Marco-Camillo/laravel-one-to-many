<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = [
        'title',
        'cover_img',
        'creator',
        'date_create',
        'text_body'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
