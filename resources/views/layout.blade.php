<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>

    @yield('content')


    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contacts">Contacts</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/about">About</a></li>
    </ul>

</body>

</html>