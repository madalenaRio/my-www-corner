@extends('components.layout')
@section('content')

<section class="flex flex-wrap flex-row justify-center">
    <div class="flex flex-wrap flex-col items-center">

        <section>
            <br>
            <div class="w-96 mx-5 my-5 px-5 py-3 flex flex-wrap flex-col justify-center">
                <h1 class="mx-5 my-5 px-5 py-3 text-5xl text-amber-700">{{$comment->title}}</h1>
                <br>
                <p>{{$comment->content}}</p>
                <p>Author: {{$comment->user->name}}</p>
                <p>Published: {{$comment->publish_date}}</p>
                <p>Last updated: {{$comment->updated_at}}</p>
            </div>

        </section>

    </div>
</section>

@endsection