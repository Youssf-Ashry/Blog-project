
<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>

<h2>Comments</h2>
@foreach ($post->comments as $comment)
    <div>
        <p>{{ $comment->body }}</p>
        <small>By {{ $comment->user->name }}</small>
    </div>
@endforeach

<form action="{{ route('comments.store', $post) }}" method="POST">
    @csrf
    <textarea name="body" required></textarea>
    <button type="submit">Add Comment</button>
</form>