<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<ul id="nav">
    <li><a href="/admin">Admin</a></li>
    <li><a href="/admin/articles">Articles</a></li>
    <li><a href="/" target="_blank">Main Site</a></li>

</ul>
@yield('content')

</body>
</html>