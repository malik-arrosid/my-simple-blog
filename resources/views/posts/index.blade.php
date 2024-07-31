<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="shortcut icon" href="{{ asset('icon/blog.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>Simple Blog</h1>
        <a href="{{ route('posts.create') }}" class="new-post-button">Create New Post</a>
        <div class="posts">
            @if($posts->isEmpty())
                <span>No posts available.</span>
            @else
                @foreach ($posts as $post)
                    <div class="post">
                        <h2>
                            <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a> - {{ $post->author }}
                        </h2>
                        <p>{{ Str::limit($post->content, 100, '...') }}</p>
                        <p class="date">{{ $post->created_at }}</p>
                        <div class="actions">
                            <a href="{{ route('posts.edit', $post->id) }}" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('posts.destroy', $post->id) }}" title="Delete" onclick="return confirm('Are you sure you want to delete this post?');"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</body>
</html>
