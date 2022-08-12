@extends('components.body')
@section('content')


<section class="flex flex-wrap flex-row justify-center">
        <section class="flex flex-wrap flex-col items-center">
            <div class="w-96 mx-5 my-5 px-5 py-3 flex flex-wrap flex-col justify-center">
                <img src="{{$author->imgURL}}" alt="some image">

                <br>
                <p>{{$author->name}}</p>
                <p class="text-xl font-semibold text-fuchsia-400">
                    Stories published so far:
                </p>
                <br>
                <ul style="list-style: none; color:black items-center">
                    @foreach ($stories as $story)
                    <li class="text-xl font-semibold text-fuchsia-900 hover:bg-violet-900 hover:text-yellow-50">
                        <a href="{{route('story', $story->id)}}">{{$story->title}}</a>
                    </li>
                    <hr class="mx-5 my-5" style="width:50%" , size="4" , color=black>
                    @endforeach
                </ul>
        </section>

    </div>
</section>



@endsection