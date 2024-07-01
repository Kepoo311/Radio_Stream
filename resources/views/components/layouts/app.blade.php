<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="{{asset('css/build.css')}}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link href="https://vjs.zencdn.net/8.12.0/video-js.css" rel="stylesheet" />
    <script defer src="https://vjs.zencdn.net/8.12.0/video.min.js"></script>
    <title>Just Radio | @stack('title')</title>
</head>

<body class="bg-white">
    <nav class="navbar bg-gray-100 shadow-lg">
        <div class="flex-1">
            <a href="/" class="btn btn-ghost text-xl text-black">Just Radio</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 text-black">
                <li><a href="/radio">Radio list</a></li>
                <li>
                    <details>
                        <summary>Parent</summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a>Link 1</a></li>
                            <li><a>Link 2</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </nav>

    {{ $slot }}

    <footer class="footer footer-center bg-base-900 text-base-content p-4">
        <aside>
            <p>Copyright © {{ date('Y') }} - All right reserved by Kepodev</p>
        </aside>
    </footer>
</body>

</html>
