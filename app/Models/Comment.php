<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'user_id',
        'body',
    ];

    // کامنت متعلق به یک پست است
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // کامنت متعلق به یک کاربر است
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
