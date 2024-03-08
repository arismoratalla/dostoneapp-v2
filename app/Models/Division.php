<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'active'];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function chief()
    {
        return $this->belongsTo(User::class, 'chief_id');
    }

    public function oic()
    {
        return $this->belongsTo(User::class, 'oic_id');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}
