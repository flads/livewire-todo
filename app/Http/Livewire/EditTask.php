<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class EditTask extends Component
{
    public $task;

    protected $listeners = [
        'editingTask'
    ];

    public function mount()
    {
        $this->getTask();
    }

    public function editingTask()
    {
        $this->getTask();
    }

    public function getTask()
    {
        $this->task = Task::where('editing', '=', true)
            ->first();
    }

    public function render()
    {
        return view('livewire.edit-task');
    }
}
