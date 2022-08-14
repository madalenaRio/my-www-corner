<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/js/app.js')
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <title>Short-Nibbles</title>
</head>

<body class="flex flex-wrap flex-col justify-center items-center">
    <header>
        <nav class="flex flex-wrap flex-col justify-center items-center h-full mx-5 my-5 mt-20">
            <h1 class="mx-5 my-5 px-5 py-4 justify-center items-center text-7xl font-bold text-amber-300 border-double border-4 rounded-lg border-amber-600"> 
                Short Nibbles 
            </h1>
            <h2 class="justify-center items-center px-5 py-3 text-amber-600 text-2xl overline">
                A community of casual looney writers lurks around here, beware not to fall in this "rabbit whole doc"! 
            </h2>
            <hr class="mx-5 my-5" style="width:50%" , size="4" , color=black>

            <div class="flex flex-wrap flex-row items-center mx-5 my-5 px-5 py-3">
                <a class="m-2 my-3 px-6 py-2 bg-purple-500 text-xl text-white cursor-pointer rounded-lg
                    hover:bg-purple-200 hover:text-yellow-600 active:bg-amber-500" href="{{route('home')}}">home</a>
                <a class="m-2 my-3 px-6 py-2 bg-purple-500 text-xl text-white cursor-pointer rounded-lg
                    hover:bg-purple-200 hover:text-yellow-600 active:bg-amber-500" href="{{route('stories')}}">stories</a>
                <a class="m-2 my-3 px-6 py-2 bg-purple-500 text-xl text-white cursor-pointer rounded-lg
                    hover:bg-purple-200 hover:text-yellow-600 active:bg-amber-500" href="{{route('authors')}}">authors</a>
                <a class="m-2 my-3 px-6 py-2 bg-purple-500 text-xl text-white cursor-pointer rounded-lg
                    hover:bg-purple-200 hover:text-yellow-600 active:bg-amber-500" href="{{route('forum')}}">forum</a>
                <a class="m-2 my-3 px-6 py-2 bg-purple-500 text-xl text-white cursor-pointer rounded-lg
                    hover:bg-purple-200 hover:text-yellow-600 active:bg-amber-500" href="{{route('login')}}">login</a>
                <a class="m-2 my-3 px-6 py-2 bg-purple-500 text-xl text-white cursor-pointer rounded-lg
                    hover:bg-purple-200 hover:text-yellow-600 active:bg-amber-500" href="{{route('register')}}">become a Looney</a>
            </div>


            <hr class="mx-5 my-5" style="width:50%" , size="4" , color=black>
        </nav>

        @if(session()->has('message'))
        <div    x-data="{ show: true }"
                x-init="setTimeout(() => show = false, 4000)"
                x-show="show"
                class="items-center bg-blue-500 text-white py-2 px-8 rounded-xl text-lg"
        >
            <p>{{ session()->get('message') }}</p>
        </div>
        @endif
    </header>