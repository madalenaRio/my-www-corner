@extends('layouts.layout')
@extends('components.sidebar')
@section('content')


<section class="flex flex-wrap flex-col justify-center mt-20">
    <div class="flex flex-wrap flex-col justify-center items-center">

        <h1 class="m-4 text-3xl font-bold text-gray-900 dark:text-gray-400">
            Back-End Projects
        </h1>

        <section class="flex flex-col flex-wrap w-full justify-center items-center mx-4 my-4 bg-rose-100">         
                <!-- Begin card  -->
                <a href="{{route('home')}}" 
                class="flex flex-col items-center m-6 min-w-96 pr-4 bg-amber-100 rounded-lg border shadow-md md:flex-row md:max-w-screen hover:bg-blue-200 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" 
                    src="/images/ShortNibbles.png" alt="">
                    <div class="flex flex-col justify-between pl-8 p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Laravel Blog Project
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 md:max-w-xl">
                           I used Laravel breeze for CRUD actions and tailwind for styling and pagination display.this is just a bit more text to test the widh size.
                        </p>
                    </div>
                </a>
                <!-- End card -->
        </section>

        <h1 class="m-4 text-3xl font-bold text-gray-900 dark:text-gray-400">
            Javascript DOM Projects
        </h1>

        <section class="flex flex-col flex-wrap w-full justify-center items-center mx-4 my-4 bg-violet-100">

            <!-- card  -->
            <a href="https://madalenasblackjackcorner.netlify.app" 
                class="flex flex-col items-center m-6 min-w-96 pr-4 bg-fuchsia-100 rounded-lg border shadow-md md:flex-row md:max-w-screen hover:bg-fuchsia-400 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" 
                    src="/images/blackJack.png" alt="">
                    <div class="flex flex-col justify-between pl-8 p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                          Black Jack Game
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 md:max-w-xl">
                          This was a project to practice DOM
                        </p>
                    </div>
                </a>
            <!-- end card -->

            <!-- card  -->
            <a href="https://rockpaperscissors-madalena.netlify.app" 
                class="flex flex-col items-center m-6 min-w-96 pr-4 bg-fuchsia-100 rounded-lg border shadow-md md:flex-row md:max-w-screen hover:bg-fuchsia-400 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" 
                    src="/images/RockPaperScissors.png" alt="">
                    <div class="flex flex-col justify-between pl-8 p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Rock Paper Scissors game
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 md:max-w-xl">
                        For this project I used Javascript and was a lot of trouble to figure the logic. lots of if else here.
                        </p>
                    </div>
                </a>
            <!-- end card -->

            <!-- card  -->
            <a href="https://madalenamemorygamecorner.netlify.app" 
                class="flex flex-col items-center m-6 min-w-96 pr-4 bg-fuchsia-100 rounded-lg border shadow-md md:flex-row md:max-w-screen hover:bg-fuchsia-400 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" 
                    src="/images/memoryApp.png" alt="">
                    <div class="flex flex-col justify-between pl-8 p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Memory Game
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 md:max-w-xl">
                        credit where credit is due:</br>
                        For this project I followed a toturial by "https://developedbyed.com/"
                        </p>
                    </div>
                </a>
            <!-- end card -->
        </section>

        <h1 class="m-4 text-3xl font-bold text-gray-900 dark:text-gray-400">
           API Projects
        </h1>

        <section class="flex flex-col flex-wrap w-full justify-center items-center mx-4 my-4 bg-teal-100">

            <!-- card  -->
            <a href="https://madalenamemorygamecorner.netlify.app" 
                class="flex flex-col items-center m-6 min-w-96 pr-4 bg-teal-200 rounded-lg border shadow-md md:flex-row md:max-w-screen hover:bg-teal-500 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" 
                    src="/images/weatherApp.png" alt="">
                    <div class="flex flex-col justify-between pl-8 p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Another Weather App to add to the pile.
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 md:max-w-xl">
                        This was a tricky one but I made it through.
                        </p>
                    </div>
                </a>
            <!-- end card -->

        </section>

    </div>
</section>
@endsection