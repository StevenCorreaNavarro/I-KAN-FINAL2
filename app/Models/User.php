<?php

namespace App\Models;
use App\Models\UserController;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        // 'profile_photo',
         // Agrega este campo
        'profile_image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function favs()
    {
        // $favs = auth()->user()->favs;
        // $likes = auth()->user()->likes;

        return $this->hasMany(Fav::class);
    }
    
     protected $casts = [
        'email_verified_at' => 'datetime',
        'password'=> 'hashed',  // en esta parte es lo mismo que esto   Hash::make(value:'123456789');
    ];
    
}
