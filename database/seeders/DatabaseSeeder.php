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
        Task::factory()->count(4)->create();
        Task::factory()->count(3)->create([
            'completed_at' => now()
        ]);
    }
}
