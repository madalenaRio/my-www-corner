@extends('layouts.layout')
@extends('components.madCornerHeader')

@section('content')


<section class="flex flex-wrap flex-col justify-center mx-10 my-10">
   
    <div class="flex flex-wrap flex-col items-center">
        <h1 class="text-3xl">Welcome to my corner!</h1>
        <h3>Snoop around ;)</h3>
    </div>

    <section>
        <h1>
            My projects:
        </h1>
    </section>
    <section>
        <section>
            <h1>Back-End Projects</h1>
            <h3><b>Laravel</b></h3>
            <div class="items-center mx-5 my-5 px-5 py-3 grid grid-cols-3">
                <a class="m-2 my-3 px-6 py-2 border-double border-4 border-amber-400 text-xl text-gray cursor-pointer rounded-lg
         hover:bg-amber-100 hover:text-yellow-800 active:bg-amber-500" href="{{route('home')}}">ShortNibbles</a>

            </div>
        </section>
        <section>
            <h1>Javascript Projects</h1>
            <div class="items-center mx-5 my-5 px-5 py-3 grid grid-cols-3">
                <a class="m-2 my-3 px-6 py-2 border-double border-4 border-fuchsia-400 text-xl text-gray cursor-pointer rounded-lg
         hover:bg-fuchsia-100 hover:text-fuchsia-800 active:bg-fuchsia-500" href="https://madalenasblackjackcorner.netlify.app">Black-Jack game</a>
                <a class="m-2 my-3 px-6 py-2 border-double border-4 border-blue-400 text-xl text-gray cursor-pointer rounded-lg
         hover:bg-blue-100 hover:text-blue-800 active:bg-blue-500" href="https://madalenamemorygamecorner.netlify.app">Memory game</a>
                <a class="m-2 my-3 px-6 py-2 border-double border-4 border-emerald-400 text-xl text-gray cursor-pointer rounded-lg
         hover:bg-emerald-100 hover:text-emerald-800 active:bg-emerald-500" href="https://rockpaperscissors-madalena.netlify.app">Rock Paper Scissors game</a>
            </div>
            <h1>API Projects</h1>
            <div class="items-center mx-5 my-5 px-5 py-3 grid grid-cols-3">
                <a class="m-2 my-3 px-6 py-2 border-double border-4 border-rose-400 text-xl text-gray cursor-pointer rounded-lg
         hover:bg-rose-100 hover:text-rose-800 active:bg-rose-500" href="https://todaysweatherbymadalenario.netlify.app">Another Weather App</a>
            </div>

        </section>

    </section>
</section>
@endsection