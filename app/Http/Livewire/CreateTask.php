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
        $count = Task::all()->count();
        
        if($count < 10) {
            Task::create([
                'description' => $this->description
            ]);
        } else {
            $this->addError('tasksLimit', 'In this trial version you are limited to handling only 10 tasks.');
        }
    }

    public function render()
    {
        return view('livewire.create-task')
            ->layout('layouts.base');
    }
}
