<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('/app.css')}}">
    <script src="{{url('/app.js')}}"></script>
    <title>@yield('title')</title>

</head>

<body>

    <nav>
        <ul>
            <li><a href="{{Route('home.index')}}">home</a></li>
            <li><a href="{{Route('home.about')}}">about</a></li>
            <li><a href="{{Route('home.contact')}}">contact</a></li>
            <li><a href="{{Route('computer.index')}}">computer</a></li>
            <li><a href="{{Route('users.index')}}">Users</a></li>
        </ul>
    </nav>
    @yield('content')

</body>

</html>
