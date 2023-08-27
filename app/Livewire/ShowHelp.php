<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;

class ShowHelp extends Component
{
    public bool $showHelp = false;

    public function toggleHelp(): void
    {
        $this->showHelp = ! $this->showHelp;
    }

    public function render(): View
    {
        return view('livewire.show-help');
    }
}
