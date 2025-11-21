<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use SoftDeletes;

    // protected $fillable = [
    //     'user_id', 'category_id','tag_id', 'title', 'slug',
    //     'excerpt', 'content', 'featured_image',
    //     'gallery', 'published_at', 'status',
    //     'is_featured', 'is_breaking', 'views'
    // ];

    protected $guarded = [];

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

    public function tags()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }

    // public function postTag(): BelongsTo
    // {
    //     return $this->belongsTo(PostTag::class, 'tag_id');
    // }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


     public function scopePublished($query)
    {
        return $query->where('status', 'published')
                     ->whereNotNull('published_at')
                     ->where('published_at', '<=', now());
    }

    public function incrementViews()
    {
        $this->increment('view_count');
    }

    public function getReadingTimeAttribute()
    {
        $words = str_word_count(strip_tags($this->content));
        $minutes = ceil($words / 200);
        return $minutes . ' min read';
    }

    public function likes()
{
    return $this->belongsToMany(User::class, 'post_user_likes')->withTimestamps();
}

public function likedByUser($userId)
{
    return $this->likes()->where('user_id', $userId)->exists();
}
    
}
