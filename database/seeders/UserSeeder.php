<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory()->count(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'description1'=>'moula l site',
            'description2'=>'moula l site ',
            'password' => Hash::make('admin123'),
            'remember_token' => Str::random(10),
            'facebook'=> 'https://www.facebook.com/profile.php?id=100073799539058',
            'instagram'=>'https://www.instagram.com/ghassen_fatnassi/',
            'linkedin'=>'https://www.linkedin.com/in/ghassen-fatnassi-70ab52283/',
            'followers'=>mt_rand(1,1000),
            'following'=>mt_rand(1,1000),
            'usertype' => 'admin',
        ]);
    }
}