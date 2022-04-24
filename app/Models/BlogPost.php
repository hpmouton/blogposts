<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\User;
use App\Models\Image;

class BlogPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'blogPostTitle',
        'blogPostContent',
        'blogPostIsHighlight',
        'user_id'
    ];
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function user(){
        return $this->belongsTo(User::class);

    }
    public function image(){
        return $this->hasOne(Image::class);
    }
}
