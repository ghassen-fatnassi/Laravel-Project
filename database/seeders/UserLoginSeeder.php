<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\UserLogin;
use App\Models\User;
use Carbon\Carbon;
use App\Models\ArticleView;

class UserLoginSeeder extends Seeder
{
 /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all users
        $users = User::all();

        foreach ($users as $user) {
            // Generate a random number of logins for each user within the range [100, 10000]
            $loginCount = mt_rand(50, 500);
            
            // Calculate the time range for the last month
            $startDate = Carbon::now()->subMonth();
            $endDate = Carbon::now();

            // Generate login times evenly spaced within the last month
            $loginTimes = $this->generateLoginTimes($loginCount, $startDate, $endDate);

            // Create login records for the user
            foreach ($loginTimes as $loginTime) {
                $user_login=new UserLogin;
                $user_login->logger_id=$user->id;
                $user_login->created_at = $loginTime;
                $user_login->save();
            }
        }
    }

    /**
     * Generate random login times within a specified time range.
     *
     * @param int $count
     * @param Carbon $start
     * @param Carbon $end
     * @return array
     */
    private function generateLoginTimes($count, $start, $end)
    {
        $loginTimes = [];

        // Calculate the interval between login times
        $interval = $end->diffInSeconds($start) / $count;

        // Generate login times
        for ($i = 0; $i < $count; $i++) {
            $loginTimes[] = Carbon::createFromTimestamp($start->timestamp + $i * $interval);
        }

        return $loginTimes;
    }
}