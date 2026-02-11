<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'citys';
    protected $fillable =  [
        'name',
        'type'

    ]; 

    public function heros()
    {
        return $this->belongsToMany(Hero::class)->withPivot('active')->withTimestamps();
    }
    
}
