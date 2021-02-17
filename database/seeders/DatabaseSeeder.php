<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Task::factory()->count(400)->create();
        Task::factory()->count(10000)->create([
            'completed_at' => now()
        ]);
    }
}
