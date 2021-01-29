<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Carbon\Carbon;
use Livewire\Component;

class EditTasks extends Component
{
    public $tasks;

    protected $listeners = ['editingTasks'];

    public function mount()
    {
        $this->getTasks();
    }

    public function editingTasks()
    {
        $this->getTasks();
    }

    public function getTasks()
    {
        $tasks = Task::where('editing', '=', true)
            ->orderBy('updated_at')
            ->get();

        /*foreach ($tasks as $key => $task) {
            $date = Carbon::parse($task->updated_at);
            $task->updated_at = $date->isoFormat('DD/MM/YY HH:mm');
            }*/

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
        return view('livewire.edit-tasks');
    }
}
