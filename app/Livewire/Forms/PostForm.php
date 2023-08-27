<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Form;
use App\Services\PostService;
use Livewire\Attributes\Locked;

class PostForm extends Form
{
    public ?Post $post = null;

    #[Rule('required|min:5')]
//    #[Locked]
    public string $title = '';

    #[Rule('required|min:5')]
    public string $body = '';

    public function setPost(Post $post): void
    {
        $this->post = $post;

        $this->title = $post->title;

        $this->body = $post->body;
    }

    public function save(): void
    {
        Post::create($this->all());
//        (new PostService())->storePost($this->title, $this->body);

        $this->reset('title', 'body');
    }

    public function update(): void
    {
        $this->post->update($this->all());
    }
}
