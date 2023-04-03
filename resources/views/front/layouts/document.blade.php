<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('front.partials.head')
</head>
<body>
    <header class="flex">
        @include('front.partials.header')
    </header>
    <main>
        <div class="banner">
            <div class="banner-text">Premium cars just for you</div>
        </div>

        @yield('content')

    </main>
    <footer id="footer">
        @include('front.partials.footer')
    </footer>
</body>
</html>
