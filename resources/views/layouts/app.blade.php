<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Мой сайт')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Главная</a>
        <a class="nav-link" href="{{ route('orders.index') }}">Заказы</a>
        <a class="nav-link" href="{{ route('products.index') }}">Товары</a>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<footer class="text-center mt-5 text-muted">
    <hr>
    <p>&copy; {{ date('Y') }} Мой сайт</p>
</footer>
</body>
</html>
