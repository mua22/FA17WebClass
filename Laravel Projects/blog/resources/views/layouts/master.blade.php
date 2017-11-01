<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our First Laravel App</title>
    <link rel="stylesheet" href="/css/blog.css">

        @yield('style')

</head>
<body>
<ul id="nav">
    <li><a href="">Home</a></li>
    <li><a href="/hobbies">Hobbies</a></li>
    <li><a href="/enemies">Enemies</a></li>
    <li><a href="/friends">Fiends</a></li>
</ul>
@yield('content')

<hr>
This is My Footer: @yield('footer')

</body>
</html>