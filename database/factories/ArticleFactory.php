<?php

namespace Database\Factories;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category' => $this->faker->randomElement(['Programming Web/Mobile', 'Artifical Intelligence', 'Cyber Security','Machine Learning']),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'body' => $this->faker->text,
            'author_id' => function () {
                // Retrieve a random existing user ID from the database
                $randomUserId = \App\Models\User::inRandomOrder()->first()->id;
                return $randomUserId;
            },
            'likes' => $this->faker->numberBetween(0, 100),
            'comments' => $this->faker->numberBetween(0, 20),
            'bookmarks' => $this->faker->numberBetween(0, 50),
            'image' => 'public/assets/article-img.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
