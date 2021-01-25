<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;
use Carbon\Carbon;

class IndexTasks extends Component
{
    public $tasks;

    public $task;

    protected $listeners = ['taskAdded'];

    public function mount()
    {
        $this->getTasks();
    }

    public function taskAdded()
    {
        $this->getTasks();
    }

    public function taskCompleted($id)
    {
        $this->getTask($id);
        $this->task->completed_at = now();
        $this->task->save();

        $this->mount();
    }

    public function deleteTask($id)
    {
        $this->getTask($id);
        $this->task->delete();

        $this->mount();
    }

    public function getTasks()
    {
        $this->tasks = Task::where('completed_at', null)
            ->get();
    }

    public function getTask($id)
    {
        $this->task = Task::find($id);
    }

    public function render()
    {
        return view('livewire.index-tasks');
    }
}
