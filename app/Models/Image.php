<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogPost;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'imagePath',
        'blog_posts_id'
    ];

    public function blogpost(){
        return $this->belongsTo(BlogPost::class);
    }
}

