<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\Attributes\Reactive;
use Illuminate\Contracts\View\View;

class TodoInfo extends Component
{
    #[Reactive]
    public Todo $todo;

    public function render(): View
    {
        return view('livewire.todo-info');
    }
}
