<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-brand-gray-800 min-h-screen">

        <!-- Page Heading -->
        <header class="w-full">
            @include('layouts.navigation')
{{--            <div class="flex items-center">--}}
{{--                <img class="w-6 h-8" src="{{asset('svg/logo.svg')}}" alt="OP Web Designers Logo" />--}}
{{--                <p class="uppercase bg-gradient-to-r from-brand-primary-300 via-brand-primary-400 to-brand-primary-500 text-transparent bg-clip-text font-extrabold ml-2">OP Web Designers</p>--}}
{{--            </div>--}}
{{--            <div class="-mr-2 flex items-center sm:hidden">--}}
{{--                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-brand-primary-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">--}}
{{--                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">--}}
{{--                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}
        </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
    </body>
</html>
