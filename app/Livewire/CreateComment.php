<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Contracts\View\View;

class CreateComment extends Component
{
    public Post $post;

    #[Rule('required')]
    public string $body = '';

    public function save(): void
    {
        $this->post->comments()->create(['body' => $this->body]);

        $this->dispatch('comment-added');

        $this->reset('body');
    }

    public function render(): View
    {
        return view('livewire.create-comment');
    }
}
