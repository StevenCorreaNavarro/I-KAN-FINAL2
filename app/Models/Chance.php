<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chance extends Model
{
    use HasFactory;
    public function styles()
    {
        return $this->belongsToMany('App\Models\Style');
    }
    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}
