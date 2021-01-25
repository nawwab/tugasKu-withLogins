<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TugasKu</title>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="flex flex-col justify-between min-h-screen text-gray-700">
            <nav class="flex justify-between items-center w-full py-4 md:px-8 px-4 bg-white">
                <div class="flex items-center">
                    <a class="mr-4" href="/">
                        <img class="w-32" src="{{ asset('image/logo.svg') }}" alt="">
                    </a>
                    @auth
                    <a class="mr-4 hidden md:block" href="/dashboard">Dashboard</a>
                    @endauth
                    <a class="mr-4 hidden md:block" href="/help">Help</a>
                    <a class="mr-4 hidden md:block" href="/about">About</a>
                </div>
                <div class="flex items-center">
                    @auth
                        <a class="" href=""></a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="mr-4">Logout</button>
                        </form>
                    @endauth

                    @guest
                        <a class="mr-4" href="{{ route('login') }}">Login</a>
                        <a class="mr-4" href="{{ route('register') }}">Register</a>
                    @endguest
                </div>
            </nav>

            @yield('content')

            <footer class="flex items-center justify-center w-full bg-white">
                <span class="p-4">created in jogja</span>
            </footer>
            <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
