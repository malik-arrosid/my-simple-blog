<!-- edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script>
        function showPopup() {
            document.getElementById('popup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
                showPopup();
            @endif
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Edit Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}" required />
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" value="{{ $post->author }}" required />
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="10" required>{{ $post->content }}</textarea>
            <button type="submit">Update Post</button>
        </form>
        <a href="{{ route('posts.index') }}" class="back-button">Back to Home</a>
    </div>
    <div id="popup" class="popup" style="display:none;">
        <h2>Success!</h2>
        <p>{{ session('success') }}</p>
        <button onclick="window.location.href='{{ route('posts.index') }}'">Back to Home</button>
    </div>
    <div id="overlay" class="overlay" style="display:none;"></div>
</body>
</html>
