<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-500 text-white flex justify-center items-center h-screen">
    <h1 class="text-3xl font-bold">Hello, {{ $name }}!</h1>
</body>
</html>
