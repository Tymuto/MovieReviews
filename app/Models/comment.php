<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    protected $fillable = ['naam', 'e-mail', 'reactie', 'review_id'];

    /**
     * Get the review that owns the comment.
     */
    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}
