<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Power extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function heroes()
    {
        return $this->hasMany(Hero::class);
    }
}
