<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'category_id', 'title', 'slug',
        'excerpt', 'content', 'featured_image',
        'gallery', 'published_at', 'status',
        'is_featured', 'is_breaking', 'views'
    ];

    protected $casts = [
        'gallery' => 'array',
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
        'is_breaking' => 'boolean',
        'views' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    // public function postTag(): BelongsTo
    // {
    //     return $this->belongsTo(PostTag::class, 'tag_id');
    // }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
