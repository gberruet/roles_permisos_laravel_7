<?php

namespace App\GastonPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name', 'slug', 'description',
    ];

    public function roles(){
        return $this->belongsToMany('App\GastonPermission\Models\Role')->withTimestamps();
    }
}
