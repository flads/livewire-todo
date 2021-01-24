<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class CompletedTasks extends Component
{
    public $tasks;

    protected $listeners = ['taskAdded'];

    public function mount()
    {
        $this->getTasks();
    }

    public function taskAdded()
    {
        $this->getTasks();
    }

    public function getTasks()
    {
        $this->tasks = Task::All();
    }

    public function render()
    {
        return view('livewire.completed-tasks');
    }
}
