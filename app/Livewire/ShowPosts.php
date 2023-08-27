<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Url;
use Illuminate\Contracts\View\View;

class ShowPosts extends Component
{
    #[Url(history: true)]
    public string $search = '';

    public function render(): View
    {
        return view('livewire.show-posts', [
            'posts' => Post::where('title', 'LIKE', '%' . $this->search. '%')->get(),
        ]);
    }
}
