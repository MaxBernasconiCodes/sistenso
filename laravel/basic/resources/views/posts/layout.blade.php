<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @isset($title)
    <title>{{$title}}</title>
    @else
    <title>Titulo generico</title>
    @endisset

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @yield('nav')
    @yield('content')
</body>
</html>
