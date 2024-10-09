<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class UserController extends Authenticatable 
{
    use HasFactory;

    public function occasion()
    {
        // $likes = auth()->user()->likes;
        return $this->belongsTo(Chance::class);
    }

  

    
    
}
