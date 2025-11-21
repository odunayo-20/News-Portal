<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    public $table = 'post_tags';

    protected $guarded = [];


    // public function post()
    // {
    //     return $this->belongsTo(Post::class);
    // }

    // public function tag()
    // {
    //     return $this->belongsTo(Tag::class);
    // }

}
