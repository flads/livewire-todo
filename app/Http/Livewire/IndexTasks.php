<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;
use Carbon\Carbon;

class IndexTasks extends Component
{
    public $tasks;

    public $task;

    protected $listeners = [
        'taskAdded',
        'taskEdited',
        'taskReturned'
    ];

    public function mount()
    {
        $this->getTasks();
    }

    public function taskAdded()
    {
        $this->getTasks();
    }

    public function taskEdited()
    {
        $this->getTasks();
    }

    public function taskReturned()
    {
        $this->getTasks();
    }

    public function taskCompleted($id)
    {
        $this->getTask($id);
        $this->task->completed_at = now()->toDateTimeString();
        $this->task->save();

        $this->mount();

        $this->emit('taskCompleted');
    }

    public function editTask($id)
    {
        $editingTask = Task::where('editing', '=', true)
            ->first();

        if(!$editingTask) {
            $this->getTask($id);
            $this->task->editing = true;
            $this->task->save();

            $this->mount();

            $this->emit('editingTask');
        }
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
            ->where('editing', '!=', true)
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
