<?php

namespace Database\Factories;
use App\Models\Article;
use App\Models\User;
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
            'category' => $this->faker->randomElement(['programming-web-mobile', 'artificial-intelligence', 'cyber-security','machine-learning']),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'body' => $this->faker->text,
            'likes' => mt_rand(0, 100),
            'comments' => mt_rand(0, 100),
            'bookmarks' => mt_rand(0, 100),
            'image' => 'public/assets/article-img.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}