<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\User;

class BlogPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'blogPostTitle',
        'blogPostContent',
        'user_id'
    ];
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function user(){
        return $this->belongsTo(User::class);

    }
}
