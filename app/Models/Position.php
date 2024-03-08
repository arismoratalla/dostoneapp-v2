<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = ['name_long', 'name_short', 'type'];

    protected $casts = [
        'type' => 'string',
    ];
}
