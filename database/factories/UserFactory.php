<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'shortbio'=>'loves Cybersecurity',
            'institution'=>'SupCom',
            'position'=>'tunisia',
            'phone'=>'50' . mt_rand(0, 9) . mt_rand(0, 9) . mt_rand(0, 9) . mt_rand(0, 9) . mt_rand(0, 9) . mt_rand(0, 9) . mt_rand(0, 9),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'twitter'=> 'https://www.facebook.com/profile.php?id=100073799539058',
            'github'=>'https://www.instagram.com/ghassen_fatnassi/',
            'linkedin'=>'https://www.linkedin.com/in/ghassen-fatnassi-70ab52283/',
            'article_count'=>mt_rand(5,15), //this one doesn't matter in production as i only used it for database seeding for testing
            'followers'=>mt_rand(1,1000),
            'following'=>mt_rand(1,1000),
            'usertype'=>'user',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}