<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];

    // پست متعلق به یک کاربر است
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // پست چند کامنت دارد
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
