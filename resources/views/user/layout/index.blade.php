<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pro-Ukom</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    @include('user.layout.navbar')
    @yield('content')
</body>
<script src="/js/bootstrap.bundle.min.js"></script>

</html>
