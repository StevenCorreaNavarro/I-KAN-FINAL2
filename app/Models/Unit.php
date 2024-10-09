<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre', 'descrip', 'ubica','image', // Otros campos de tu tabla
    ];
}
