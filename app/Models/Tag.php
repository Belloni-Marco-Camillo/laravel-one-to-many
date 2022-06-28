<?php

namespace App\Models;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
/* manca use src */

class Tag extends Model
{
    
    public function posts():BelongsToMany{
        return $this->belongsTo(Category::class);
    }

    public function tags():BelongsToMany{
        return $this->belongsTo(Category::class);
    }
}
