<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    protected $fillable = ['titel', 'film', 'inhoud'];

    /**
     * Get the comments for the review.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
