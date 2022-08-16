@extends('components.layout')
@section('content')

<section class="flex flex-wrap flex-row justify-center">
    <div class="flex flex-wrap flex-col items-center">

        <section class="flex justify-center">
            <br>
            <div class="w-2/3 mx-5 my-5 px-5 py-3 flex flex-wrap flex-col justify-center items-center">
                <img src="{{$story->imgURL}}" alt="some image">
                <h1 class="mx-5 my-5 px-5 py-3 text-5xl text-amber-700">{{$story->title}}</h1>
                <br>
                <p class="text-xl text-grey-600">{{$story->content}}</p>
                <a class="text-xl p-2 text-amber-600 hover:bg-amber-900 hover:text-yellow-50"
                href="{{route('author', $story->author->id)}}">
                    Author: {{$story->author->name}}
                </a>
                <p class= "text-xl text-amber-600">
                    Published: {{$story->publish_date}}
                </p>
                <p class= "text-xl text-amber-600">
                    Last updated: {{$story->updated_at}}
                </p>
            </div>

        </section>

    </div>
</section>

@endsection