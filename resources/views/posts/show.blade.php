<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <div class="post-page">
            <p class="date">{{ $post->created_at }} - {{ $post->author }}</p>
            <p>{{ $post->content }}</p>
        </div>
        <a href="{{ route('posts.index') }}" class="back-button">Back to Home</a>
    </div>
</body>
</html>
