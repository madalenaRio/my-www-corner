@extends('components.layout')
@section('content')


<section class="flex flex-wrap flex-row justify-center">
    <div class="flex flex-wrap flex-col items-center">

        <section>
            <br>
            <div class="w-96 mx-5 my-5 px-5 py-3 flex flex-wrap flex-col justify-center">
            <img src="{{$user->imgURL}}" alt="some image">
           
                <br>
                <p>{{$user->name}}</p>
                <p class="text-xl font-semibold text-amber-400">
                    comments published so far:
                </p>
                <br>
                <ul style="list-style: none; color:black items-center">
                @foreach ($comments as $comment)
                <li class="text-xl font-semibold text-amber-600 hover:bg-amber-900 hover:text-yellow-50">
                    <a href="{{route('comment', $comment->id)}}">{{$comment->title}}</a>
                </li>
                <hr class="mx-5 my-5" style="width:50%" , size="4" , color=black>
                @endforeach
            </ul>
                
            </div>

        </section>

    </div>
</section>



@endsection