@extends('layouts.layout')
@extends ('components.navbar')
@section('content')


<section class="flex flex-wrap flex-row justify-center">
    <div class="flex flex-wrap flex-col items-center ">


            <section class="mx-5 my-5 px-5 py-3 flex flex-wrap flex-col justify-center">
                <p class="p-2 text-3xl font-semibold text-amber-700">
                    {{$author->name}}</p>
                <p class="text-2xl font-semibold text-amber-500">
                    Stories published so far:
                </p>
                <br>
                <ul style="list-style: none; color:black items-center">
                    @foreach ($stories as $story)
                    <li class="text-xl font-semibold text-amber-900 hover:bg-amber-900 hover:text-white">
                        <a href="{{route('story', $story->id)}}">{{$story->title}}</a>
                    </li>
                    <hr class="mx-5 my-5" style="width:50%" , size="4" , color=black>
                    @endforeach
                </ul>
            </section>

    </div>
</section>



@endsection