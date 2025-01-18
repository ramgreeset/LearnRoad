<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="h-screen flex flex-col">
<x-header/>
<main class="flex-grow container">
    {{ $slot }}
</main>
<x-footer/>
</body>
</html>
