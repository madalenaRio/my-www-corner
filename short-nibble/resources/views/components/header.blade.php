<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/js/app.js')
        <title>Short-Nibbles</title>
    </head>
    
<body class="flex flex-wrap flex-col justify-center">
    <header>
        <nav class="flex flex-wrap flex-col items-center">
        <h1 class="mx-5 my-5 px-5 py-3 text-3xl font-bold underline"> Short Nibbles </h1>
            <ul class=" ">
                <li class="flex flex-wrap flex-row items-center" role="">
                   <a class="m-2 my-5 px-6 py-2 bg-purple-500 text-xl text-white cursor-pointer rounded-lg hover:bg-purple-200 hover:text-yellow active:bg-amber-500" href="{{route('home')}}" >home</a>
                   <a class="m-2 my-5 px-6 py-2 bg-purple-500 text-xl text-white cursor-pointer rounded-lg hover:bg-purple-200 hover:text-yellow active:bg-amber-500" href="{{route('stories')}}" >stories</a>
                   <a class="m-2 my-5 px-6 py-2 bg-purple-500 text-xl text-white cursor-pointer rounded-lg hover:bg-purple-200 hover:text-yellow active:bg-amber-500" href="{{route('authors')}}" >authors</a>
                   <a class="m-2 my-5 px-6 py-2 bg-purple-500 text-xl text-white cursor-pointer rounded-lg hover:bg-purple-200 hover:text-yellow active:bg-amber-500" href="{{route('forum')}}" >forum</a>
                   <a class="m-2 my-5 px-6 py-2 bg-purple-500 text-xl text-white cursor-pointer rounded-lg hover:bg-purple-200 hover:text-yellow active:bg-amber-500" href="{{route('login')}}" >login</a>
                   <a class="m-2 my-5 px-6 py-2 bg-purple-500 text-xl text-white cursor-pointer rounded-lg hover:bg-purple-200 hover:text-yellow active:bg-amber-500" href="{{route('register')}}" >register</a>
                </li>
                
            </ul> 
            <hr class="m-5 my-5" style="width:100%" , size="4" , color=black>
        </nav>
       
    </header>