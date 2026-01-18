<!DOCTYPE html>
<html>
@vite('resources/css/app.css')
<head>
    @include('includes.head')
</head>
<body class="bg-[#D9D9D9]">
<header class="border border-black-300">
    @include('includes.header')
</header>
<main>
    @yield('content')
</main>
</body>
</html>
