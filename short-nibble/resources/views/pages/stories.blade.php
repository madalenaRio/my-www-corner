@extends('components.body')
@section('content')

<section class="m-5 flex flex-wrap flex-col justify-center items-center">
    <div class="flex flex-wrap flex-col items-center">
        
        <section class="m-5 p-2 flex flex-col justify-center items-center">

            <h2 class="m-5 p-3 text-6xl text-fuchsia-700">Random stories</h2>
            <ul style="list-style: none; color:black items-center">
                @foreach ($stories as $story)
                <li>
                    <a class="text-3xl font-semibold m-3 p-3 text-fuchsia-900 hover:bg-violet-900 hover:text-yellow-50" href="{{route('story', $story->id)}}">
                        {{$story->title}}
                    </a>
                    <a class="text-xl font-semibold m-1 p-3 text-fuchsia-500 hover:bg-violet-600 hover:text-yellow-50" href="{{route('author', $story->author->id)}}">
                        by:{{" ". $story->author->name}}
                    </a>
                </li>
                <hr class="mx-5 my-5" style="width:50%" , size="4" , color=black>
                @endforeach
            </ul>
            <div class=" mx-2 my-10 flex flex-wrap flex-row items-center">
                {{ $stories->links() }}
            </div>

        </section>

    </div>
</section>

@endsection