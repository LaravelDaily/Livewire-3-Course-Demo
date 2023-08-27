<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;

class CreateProject extends Component
{
    public function mount(): void
    {

    }

    public function render(): View
    {
        return view('livewire.create-project');
    }
}
