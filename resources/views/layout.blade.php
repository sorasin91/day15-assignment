<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Default title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1 style="text-align: center">Welcome to Laravel Project!</h1>
    <center>
    <nav>
        <a href="/">Home</a>
        <a href="/contact">Contact</a>
        <a href="/about">About us</a>
        <a href="/services">Services</a>
        <a href="/blog">Blog</a>
    </nav>
    </center>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <footer style="text-align: center">
            <p>This is done by Sora for Full Stack Development Programme</p>
        </footer>
    </footer>
</body>
</html>