<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Dater extends Model
{

    protected $fillable = [
        'name', 'age', 'bio', 'liked',
    ];
    
    
}
