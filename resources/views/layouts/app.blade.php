<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Advanced Web Development')</title>
</head>
<body>
    <div class='main'>
        @yield('content')
    </div>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @if(session('status'))
        <div id='alert'>
            {{ session('status') }}
        </div>
    @endif

    <script>
        let alert = document.getElementById('alert');
        setTimeout(() => {
            alert.remove();
        }, 5000);
    </script>
</body>
</html>