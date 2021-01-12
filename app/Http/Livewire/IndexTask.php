<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IndexTask extends Component
{
    public function render()
    {
        return view('livewire.index-task')
            ->layout('layouts.base');
    }
}
