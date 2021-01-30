<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class EditTask extends Component
{
    public $task;
    public $description;

    protected $rules = [
        'description' => 'required|max:100|string'
    ];

    protected $listeners = [
        'editingTask'
    ];

    public function mount()
    {
        $this->getTask();
    }

    public function submit()
    {
        $this->validate();

        $this->updateTask();

        $this->task = null;

        $this->emit('taskEdited');
    }

    public function editingTask()
    {
        $this->getTask();
    }

    public function updateTask()
    {
        $this->task->description = $this->description;
        $this->task->editing = false;

        $this->task->save();
    }

    public function getTask()
    {
        $this->task = Task::where('editing', '=', true)
            ->first();

        if($this->task) {
            $this->description = $this->task->description;
        }
    }

    public function render()
    {
        return view('livewire.edit-task');
    }
}
