<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('includes.head')
</head>
<body>
    <header>
        @include('includes.header')
    </header>

    <div class="">
        @yield('content')
    </div>
    <footer>
    @include('includes.footer')
    </footer>
</body>
</html>