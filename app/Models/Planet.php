<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $fillable = [
        'name',
        'population',
        'system_id'

    ];


    public function heroes()
    {
        return $this->hasMany(Hero::class);
    }
}
