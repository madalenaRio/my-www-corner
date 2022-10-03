<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <div class="flex flex-wrap flex-row items-center mx-5 my-5 px-5 py-3">
                   <a class="m-2 my-3 px-6 py-2 bg-purple-500 text-xl text-white cursor-pointer rounded-lg
                    hover:bg-purple-200 hover:text-yellow-600 active:bg-amber-500" href="{{route('home')}}" >home</a>
            </div>
        </div>
    </div>
</x-app-layout>
