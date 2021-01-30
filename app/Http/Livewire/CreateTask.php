<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class CreateTask extends Component
{
    public $description;

    protected $rules = [
        'description' => 'required|max:100|string'
    ];

    public function submit()
    {
        $this->validate();

        $this->createTask();

        $this->description = '';

        $this->emit('taskAdded');
    }

    public function createTask()
    {
        Task::create([
            'description' => $this->description
        ]);
    }

    public function render()
    {
        return view('livewire.create-task')
            ->layout('layouts.base');
    }
}
