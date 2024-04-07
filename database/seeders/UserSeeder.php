<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i<=10; $i++){
            User::create([
                'name'=>'User'.$i,
                'email'=>'user'.$i.'@example.com',
                'password'=>Hash::make('password'),
                'usertype'=>'user',
            ]);
        }
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'usertype' => 'admin',
        ]);
    }
}
