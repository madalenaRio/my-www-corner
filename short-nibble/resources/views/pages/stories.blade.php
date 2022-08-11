@extends('components.body')
@section('content')

<section class="m-5 flex flex-wrap flex-row justify-center">
    <div class="flex flex-wrap flex-col items-center">
        <section class="items-center">
            <h2 class="m-8 p-3 text-6xl text-fuchsia-700">Funny stories</h2>
            <ul style="list-style: none; color:black items-center">
                @foreach ($stories as $story)
                <li class="text-3xl font-semibold text-fuchsia-900 hover:bg-violet-900 hover:text-yellow-50">
                    <a href="{{route('storyDetail', $story->id)}}">{{$story->title}} writen by author</a>
                   
                </li> 
                <hr class="mx-5 my-5" style="width:50%" , size="4" , color=black>
                @endforeach
            </ul>
        </section>
        <p>this shows the route for stories is working</p>
    </div>
</section>

@endsection