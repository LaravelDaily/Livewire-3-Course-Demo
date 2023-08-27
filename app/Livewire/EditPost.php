<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\PostForm;
use Illuminate\Contracts\View\View;

class EditPost extends Component
{
    public PostForm $form;

    public function mount(Post $post): void
    {
        $this->form->setPost($post);
    }

    public function update(): void
    {
        $this->form->update();
    }

    #[Layout('layouts.app')]
    public function render(): View
    {
        return view('livewire.edit-post');
    }
}
