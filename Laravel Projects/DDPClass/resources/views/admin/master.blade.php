<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>
<div class="row">
    <div class="col-xs-3">
        <h3>Navigation</h3>
        <ul>
            <li><a href="/admin">Admin Home</a></li>
            <li><a href="/admin/universities">Universities</a></li>
            <li><a href="">Hotels</a></li>
            <li><a href="">Restaurants</a></li>
            <li><a href="/" target="_blank">Visit Main Site</a></li>
        </ul>
    </div>
    <div class="col-xs-9">
        @yield('content')
    </div>
</div>
</body>
</html>