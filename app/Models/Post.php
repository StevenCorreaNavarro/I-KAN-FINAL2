<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre','tipo', 'descrip1','descrip2','descrip3','descrip4', 'info','ubica','image', // Otros campos de tu tabla
    ];
}
