<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Profile;

class Author extends Model
{
    use HasFactory;
    public function profile(){
        return $this->hasOne(Profile::class);

    }
}
