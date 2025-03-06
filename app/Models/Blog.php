<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'outer_image', 'inner_image', 'title', 'short_description', 'long_description', 'author', 'date_of_post', 'meta_title', 
        'post_url', 'meta_description', 'meta_keywords'
    ];
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tag');
    }
}
