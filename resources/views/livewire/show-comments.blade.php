<div class="space-y-1">
    @auth
        @foreach($this->comments as $comment)
            <p>{{ $comment->body }}</p>
        @endforeach
    @endauth
</div>
