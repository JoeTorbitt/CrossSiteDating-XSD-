<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    public function liker()
    {
        return $this->belongsTo(User::class, 'liker_id');
    }

    public function likee()
    {
        return $this->belongsTo(Dater::class, 'likee_id');
    }
    use HasFactory;
}
