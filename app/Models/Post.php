<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'views'];

    public function contents(): HasMany
    {
        return $this->hasMany(Content::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
