<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class IndexTask extends Component
{
    public $description;

    public $tasks;

    public function mount()
    {
        $this->tasks = Task::All();
    }

    public function render()
    {
        return view('livewire.index-task')
            ->layout('layouts.base');
    }
}
