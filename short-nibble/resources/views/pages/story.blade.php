@extends('components.body')
@section('content')

<section class="flex flex-wrap flex-row justify-center">
    
        <section class="flex flex-wrap flex-col items-center">

            <br>
            <div class="w-96 mx-5 my-5 px-5 py-3 flex flex-wrap flex-col justify-center">
                <img src="{{$story->imgURL}}" alt="some image">
                <h1 class="mx-5 my-5 px-5 py-3 text-5xl text-fuchsia-700">{{$story->title}}</h1>
                <br>
                <p>{{$story->content}}</p>
                <br>
                <p>Author: {{$story->author->name}}</p>
                <p>Published: {{$story->publish_date}}</p>
                <p>Last updated: {{$story->updated_at}}</p>
            </div>

        </section>


</section>

@endsection