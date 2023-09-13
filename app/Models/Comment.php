<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function post() //post id
    {
        return $this->belongsTo(Post::class);
    }

    public function author() //author id
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
