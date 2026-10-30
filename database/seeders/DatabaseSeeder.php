<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing records
        DB::table('tasks')->delete();
        DB::table('users')->delete();

        // Get today's date
        $today = Carbon::today();

        // Insert exactly one user
        DB::table('users')->insert([
            'username' => 'alyanah',
            'full_name' => 'Alyanah Louise Nofuente',
            'email' => 'alyanah.nofuente@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert 8 sample tasks
        DB::table('tasks')->insert([
            [
                'title' => 'Review Web System Technologies notes',
                'status' => 'pending',
                'task_date' => $today->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Complete Laravel TSA3',
                'status' => 'in progress',
                'task_date' => $today->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Submit laboratory screenshots',
                'status' => 'pending',
                'task_date' => $today->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Update project documentation',
                'status' => 'completed',
                'task_date' => $today->copy()->subDay()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Prepare presentation slides',
                'status' => 'completed',
                'task_date' => $today->copy()->subDay()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Review MVC concepts',
                'status' => 'completed',
                'task_date' => $today->copy()->subDays(2)->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Study Eloquent ORM',
                'status' => 'pending',
                'task_date' => $today->copy()->addDay()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Prepare GitHub repository',
                'status' => 'pending',
                'task_date' => $today->copy()->addDay()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
