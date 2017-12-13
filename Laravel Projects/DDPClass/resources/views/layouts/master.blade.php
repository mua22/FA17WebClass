<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Lahore</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/lahore.css">
    <script src="/js/lahore.js"></script>
</head>
<body>

<ul id="nav">
    <li><a href="/">Home</a></li>
    <li><a href="/restaurants">Restaurants</a></li>
    <li><a href="/hotels">Hotels</a></li>
    <li><a href="/universities">Universities</a></li>
    <li><a href="/grounds">Sports Grounds</a></li>
    <li><a href="/admin" target="_blank">Admin Panel</a></li>

</ul>
<hr>
{{--Insert some html from child views --}}
@yield('content')
<hr>
<h4>Footer Area</h4>
@yield('footer')
</body>
</html>