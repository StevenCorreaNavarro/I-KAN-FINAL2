<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password =  '123456789' ;               //Hash::make(value:'123456789');
        $user->save();

        //ORM Object relationship Mapping
        User::create( [
            'name' => 'Admin2',
            'email' => 'admin2@gmail.com',
            'password' => '123456789',                    //Hash::make(value:'123456789');
        ]);
    }
}
