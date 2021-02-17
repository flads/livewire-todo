<?php

namespace App\Console\Commands;

use App\Jobs\RegenerateTasks as RegenerateTasksJobs;
use App\Models\Task;
use Illuminate\Console\Command;

class RegenerateTasks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'regenerate:tasks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Regenerate tasks.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->line('Running...');
        $this->newLine(1);
        //dispatch(new RegenerateTasksJobs)->onConnection('database');
        dispatch(new RegenerateTasksJobs());
        $this->info('The command was successful!');
    }
}
