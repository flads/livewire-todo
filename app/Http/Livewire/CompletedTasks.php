<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class CompletedTasks extends Component
{
    public $tasks;

    protected $listeners = [
        'taskAdded',
        'taskCompleted'
    ];

    public function mount()
    {
        $this->getTasks();
    }

    public function taskAdded()
    {
        $this->getTasks();
    }

    public function taskCompleted()
    {
        $this->getTasks();
    }

    public function getTasks()
    {
        $this->tasks = Task::where('completed_at', '!=', null)
            ->get();
    }

    public function deleteTask($id)
    {
        $this->getTask($id);
        $this->task->delete();

        $this->mount();
    }

    public function getTask($id)
    {
        $this->task = Task::find($id);
    }

    public function render()
    {
        return view('livewire.completed-tasks');
    }
}
