<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Digital Capsule</title>
    @viteReactRefresh
    @vite('resources/css/app.css')
    @vite('resources/js/app.tsx')
</head>
<body>
    <div id="app"></div>

    <script>
        window.__INITIAL_DATA__ = @json(['user' => auth()->user()]);
    </script>
</body>
</html>
