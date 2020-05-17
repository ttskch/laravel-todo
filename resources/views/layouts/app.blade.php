<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <title>Laravel Todo</title>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('todo_index') }}">Laravel Todo</a>
    </div>
</nav>

<div id="content" class="bg-white py-3">
    <div class="container">
        @yield('content')
    </div>
</div>

<footer class="container py-3">
    <div class="small text-muted text-right">
        <a href="http://ttskch.github.io" target="_blank" class="text-muted"><b>ttskch</b></a> &copy; {{ date('Y') }}
    </div>
</footer>

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
