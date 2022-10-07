@extends('layouts.layout')
@extends ('components.navbar')
@section('content')

<section class="flex flex-wrap flex-row justify-center">
        <div class="flex flex-wrap flex-col items-center">
        <section class="items-center">
            <h2 class="m-8 p-3 text-6xl font-bold text-amber-700">Looney discussion board</h2>
            <ul style="list-style: none; color:black items-center">
                @foreach ($comments as $comment)
                <li>
                    <a class="text-3xl font-semibold m-3 p-3 text-amber-900 hover:bg-amber-900 hover:text-yellow-50" href="{{route('comment', $comment->id)}}">
                        {{$comment->title}}
                    </a>
                    <a class="text-xl font-semibold m-1 p-3 text-amber-500 hover:bg-amber-600 hover:text-yellow-50" href="{{route('user', $comment->user_id)}}">
                        by:{{" ". $comment->user->name}}
                    </a>
                </li>
                <hr class="mx-5 my-5" style="width:50%" , size="4" , color=black>
                @endforeach
            </ul>
            <div class=" mx-2 my-10 flex flex-wrap flex-row items-center">
                {{ $comments->links() }}
            </div>
        </section>
            <p>this shows the route for forum is working</p>
        </div>
</section>

@endsection