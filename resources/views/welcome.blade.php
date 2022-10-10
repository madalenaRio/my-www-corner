@extends('layouts.layout')
@extends('components.madCornerHeader')

@section('content')


<section class="flex flex-wrap flex-col justify-center mx-10 my-10">

    <div class="flex flex-wrap flex-col items-center">
        <h1 class="text-3xl">Welcome to my corner!</h1>
        <h3>Snoop around ;)</h3>
    </div>
    <div class="flex flex-wrap flex-col justify-center items-center">
        <section>
            <h1 class="mb-3 text-3xl font-bold text-gray-900 dark:text-gray-400">
                My projects:
            </h1>
        </section>
        <h1 class="mb-3 text-2xl font-bold text-gray-900 dark:text-gray-400">Back-End Projects</h1>
        <section>

            <h3><b>Laravel</b></h3>
            <div class="flex flex-wrap flex-col items-center justify-around m-4">

                <!-- card  -->
                <div class="basis-1/4 flex-col items-center before:max-w-sm bg-white rounded-lg border border-gray-200 shadow-md m-4 dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="/images/ShortNibbles.png" alt="caption of the title of the writers blog">
                    </a>
                    <div class="flex-col justify-center items-center p-5">
                        <a href="{{route('home')}}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Short Nibbles</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">A blog Project for looney writers</p>

                        <div class="flex-row justify-between items-center p-5">
                            <a class="flex flex-wrap m-2 justify-center my-3 px-5 py-2 border-double border-4 border-amber-400 text-xl text-gray cursor-pointer rounded-lg hover:bg-amber-100 hover:text-yellow-800 active:bg-amber-500" href="{{route('home')}}">ShortNibbles</a>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
        </section>

        <h1 class="mb-3 text-2xl font-bold text-gray-900 dark:text-gray-400">Javascript Projects</h1>

        <section class="flex flex-row flex-wrap justify-around mx-4 my-4">

            <!-- card  -->
            <div class="basis-1/4 flex-col items-center max-w-sm bg-white rounded-lg border border-gray-200 shadow-md m-4 dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/images/blackJack.png" alt="playing cards images">
                </a>
                <div class="flex-col justify-center items-center p-5">
                    <a href="https://madalenasblackjackcorner.netlify.app">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Black Jack Game</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">For this project I used Javascript.</p>

                    <div class="flex-row justify-between items-center p-5">
                        <a class="flex flex-wrap m-2 justify-center my-3 px-5 py-2 border-double border-4 border-fuchsia-400 text-xl text-gray cursor-pointer rounded-lg hover:bg-fuchsia-100 hover:text-fuchsia-800 active:bg-fuchsia-500" href="https://madalenasblackjackcorner.netlify.app">Give it a try</a>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <!-- card  -->
            <div class="basis-1/4 flex-col items-center max-w-sm bg-white rounded-lg border border-gray-200 shadow-md m-4 dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/images/RockPaperScissors.png" alt="image of the clicking color button for each game element">
                </a>
                <div class="flex-col justify-center items-center p-5">
                    <a href="https://rockpaperscissors-madalena.netlify.app">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Rock Paper Scissors game</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">For this project I used Javascript and was a lot of trouble to figure the logic. lots of if else here.</p>

                    <div class="flex-row justify-between items-center p-5">
                        <a class="flex flex-wrap m-2 justify-center my-3 px-5 py-2 border-double border-4 border-emerald-400 text-xl text-gray cursor-pointer rounded-lg hover:bg-emerald-100 hover:text-emerald-800 active:bg-emerald-500" href="https://rockpaperscissors-madalena.netlify.app">try your luck</a>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <!-- card  -->
            <div class="basis-1/4 flex-col items-center max-w-sm bg-white rounded-lg border border-gray-200 shadow-md m-4 dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/images/memoryApp.png" alt="caption image of the memory cards from the game">
                </a>
                <div class="flex-col justify-center items-center p-5 ">
                    <a href="https://madalenamemorygamecorner.netlify.app">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Memory Game</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">For this project I followed a toturial.</p>
                    <div class="flex-row justify-between items-center p-5">
                        <a class="flex flex-wrap m-2 justify-center my-3 px-5 py-2 border-double border-4 border-blue-400 text-xl text-gray cursor-pointer rounded-lg hover:bg-blue-100" href="https://madalenamemorygamecorner.netlify.app">test your memory</a>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </section>

        <h1 class="mb-3 text-2xl font-bold text-gray-900 dark:text-gray-400">API Projects</h1>

        <div class="flex flex-row flex-wrap justify-around mx-4 my-4">

            <!-- card  -->
            <div class="basis-1/4 flex-col items-center max-w-sm bg-white rounded-lg border border-gray-200 shadow-md m-4 dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/images/weatherApp.png" alt="caption image of the search bar for searching a city to display the weather">
                </a>
                <div class="flex-col flex-wrap justify-center items-center p-5">
                    <a href="https://todaysweatherbymadalenario.netlify.app">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Another Weather App to add to the pile</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">This was a tricky one but I made it through.</p>
                    <div class="flex-row justify-between items-center p-5">
                        <a class="flex flex-wrap m-2 justify-center my-3 px-5 py-2 border-double border-4 border-rose-400 text-xl text-gray cursor-pointer rounded-lg hover:bg-rose-100 hover:text-rose-800 active:bg-rose-500" href="https://todaysweatherbymadalenario.netlify.app">get your weather</a>
                    </div>
                </div>
            </div>
            <!-- end card -->

        </div>




    </div>
</section>
@endsection