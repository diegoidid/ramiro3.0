<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'heros';
    protected $fillable = [
        'name',
        'planet_id',
        'power_id',
        'age',
    ];


public function power()
    {
        return $this->belongsTo(Power::class);
    }
    
    public function planet()
    {
        return $this->belongsTo(Planet::class);
    }

    public function citys()
    {
        return $this->belongsToMany(City::class)->withPivot('active')->withTimestamps();
    }
    
}


