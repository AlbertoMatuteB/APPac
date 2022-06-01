<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/logo.webp') }}">
    <title>APAC I.A.P QRO</title>

    <!-- Scripts -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">



</head>

<body class="antialiased h-screen" x-data="{hasOverflow:false}" :class="hasOverflow? 'overflow-hidden':'overflow-visible'">
    @auth
    <nav class="relative flex items-center justify-between flex-wrap bg-white px-6 py-4 border-b-2">
        <div class="flex items-center flex-shrink-0 mr-6 pr-6 border-r-2 border-gray-300">
            <img src="{{asset('img/logo_apac.jpeg')}}" class="w-14 mr-4" alt="Logo Apac">
            <span class="font-bold text-2xl tracking-normal">APAC</span>
        </div>

        
        <div class="w-full inline-block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow ">
                <a href="/home" class="font-light text-xl block mt-4 lg:inline-block lg:mt-0 mr-4">
                    Menu
                </a>
                
            </div>
            <div class="group inline-block relative">
                <button class="inline-flex items-center">
                    <span class="font-light text-xl tracking-normal mr-2">{{ Auth::user()->name }}</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <ul class="pt-2 absolute hidden group-hover:block">
                    <li class="">
                        <a class="bg-white border hover:bg-gray-200 font-light text-lg py-2 px-4 block whitespace-no-wrap"
                            href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sesión') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>
    @endauth
    @yield('content')
</body>

</html>
