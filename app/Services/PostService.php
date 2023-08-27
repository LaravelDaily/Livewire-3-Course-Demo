<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    public function storePost(string $title, string $body): void
    {
        Post::create([
            'title' => $title,
            'body'  => $body,
        ]);
    }
}
