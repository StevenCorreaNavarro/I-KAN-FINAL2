<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoPrincipal extends Model
{
    use HasFactory;
    protected $fillable = [
        'image1','image2', 'info1','info2', // Otros campos de tu tabla
    ];
}
