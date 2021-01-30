<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Carbon\Carbon;
use Livewire\Component;

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
        $tasks = Task::where('completed_at', '!=', null)
            ->orderBy('completed_at', 'desc')
            ->get();

        foreach ($tasks as $key => $task) {
            $date = Carbon::parse($task->completed_at);
            $task->completed_at = $date->isoFormat('DD/MM/YY HH:mm');
        }

        $this->tasks = $tasks;
    }

    public function getTask($id)
    {
        $this->task = Task::find($id);
    }

    public function deleteTask($id)
    {
        $this->getTask($id);
        $this->task->delete();

        $this->mount();
    }

    public function render()
    {
        return view('livewire.completed-tasks');
    }
}
