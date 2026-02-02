<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Royal Oud')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

<header class="header">
    <h1>Royal Oud</h1>
</header>

<main>
    @yield('content')
</main>

<footer class="footer">
    <p>© {{ date('Y') }} تصميم سالم الحربي</p>
</footer>

</body>
</html>
