<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;
use Carbon\Carbon;
use App\Models\ArticleView;

class ArticleViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all users and articles
        $users = User::all();
        $articles = Article::all();

        // Generate random seeds for article views
        foreach ($users as $user) {
            $counter=0;
            foreach ($articles as $article) {
                $random=mt_rand(15,Article::count());
                // Generate a random timestamp within the last 2 months
                $timestamp = Carbon::now()->subMonths(mt_rand(0, 2))->addDays(mt_rand(0, 60))->addHours(mt_rand(0, 23))->addMinutes(mt_rand(0, 59))->addSeconds(mt_rand(0, 59));
                if($article->author_id != $user->id)
                {
                    ArticleView::create([
                        'article_id' => $article->id,
                        'viewer_id' => $user->id,
                        'created_at' => $timestamp,
                    ]);
                }
                if($counter >= $random){break;}
                else{$counter=$counter+3;}

            }
        }    }

}