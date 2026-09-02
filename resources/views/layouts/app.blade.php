<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <a href="/user">utilisateur</a>
        <a href="/about">A propos</a>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>Mon application</p>
    </footer>
</body>
</html>