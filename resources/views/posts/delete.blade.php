<!-- delete.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title></title>
</head>
<body>
    <div id="popup" class="popup" style="display:none;">
        <h2>Success!</h2>
        <p>{{ session('success') }}</p>
        <button onclick="window.location.href='{{ route('posts.index') }}'">OK</button>
    </div>
    <div id="overlay" class="overlay" style="display:none;"></div>
</body>
</html>
