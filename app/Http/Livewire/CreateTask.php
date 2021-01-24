<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class CreateTask extends Component
{
    public $description;

    protected $rules = [
        'description' => 'required'
    ];

    public function submit()
    {
        $this->validate();

        Task::create([
            'description' => $this->description
        ]);

        $this->description = '';

        $this->emit('taskAdded');
    }

    public function render()
    {
        return view('livewire.create-task')
            ->layout('layouts.base');
    }
}
