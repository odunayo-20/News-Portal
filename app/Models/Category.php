<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'description', 'image',
        'is_featured', 'order'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'order' => 'integer',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
