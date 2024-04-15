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

        //User::factory()->count(10)->create();
        for ($i=1; $i<=10; $i++){
            User::create([
                'name'=>'User'.$i,
                'email'=>'user'.$i.'@example.com',
                'email_verified_at' => now(),
                'shortbio'=>'membre aadi',
                'institution'=>'Supcom',
                'position'=>'junior',
                'phone'=>'55800089',
                'password'=>Hash::make('Password123?'),
                'remember_token' => Str::random(10),
                'twitter'=> 'https://www.facebook.com/profile.php?id=100073799539058',
                'github'=>'https://www.instagram.com/ghassen_fatnassi/',
                'linkedin'=>'https://www.linkedin.com/in/ghassen-fatnassi-70ab52283/',
                'article_count'=>mt_rand(5,150),
                'followers'=>mt_rand(1,1000),
                'following'=>mt_rand(1,1000),   
                'usertype'=>'user',
            ]);
        }
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'shortbio'=>'moula l site',
            'institution'=>'Supcom',
            'position'=>'bureau',
            'phone'=>'55800089',
            'password' => Hash::make('Admin123?'),
            'remember_token' => Str::random(10),
            'twitter'=> 'https://www.facebook.com/profile.php?id=100073799539058',
            'github'=>'https://www.instagram.com/ghassen_fatnassi/',
            'linkedin'=>'https://www.linkedin.com/in/ghassen-fatnassi-70ab52283/',
            'article_count'=>mt_rand(5,15),
            'followers'=>mt_rand(1,1000),
            'following'=>mt_rand(1,1000),
            'usertype' => 'admin',
        ]);
        User::create([
            'name' => 'nidhal sanaa',
            'email' => 'nidhalsanaa@junior.tn',
            'email_verified_at' => now(),
            'shortbio'=>'mayekhdemch projeyetou',
            'institution'=>'Supcom',
            'position'=>'junior',
            'phone'=>'55800089',
            'password' => Hash::make('Ghassen123?'),
            'remember_token' => Str::random(10),
            'twitter'=> 'https://www.facebook.com/profile.php?id=100073799539058',
            'github'=>'https://www.instagram.com/ghassen_fatnassi/',
            'linkedin'=>'https://www.linkedin.com/in/ghassen-fatnassi-70ab52283/',
            'article_count'=>mt_rand(5,15),
            'followers'=>mt_rand(1,1000),
            'following'=>mt_rand(1,1000),
            'usertype' => 'user',
        ]);
    }
}