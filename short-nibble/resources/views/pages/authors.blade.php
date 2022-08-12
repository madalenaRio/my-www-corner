@extends('components.body')
@section('content')

<section class="m-5 flex flex-wrap flex-row justify-center items-center ">
    <div class="flex flex-wrap flex-col items-center">
        <section class="flex flex-wrap flex-col justify-center items-center sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <h2 class="m-8 p-3 text-6xl text-fuchsia-700">Funny Auhtors</h2>
            <ul style="list-style: none; color:black items-center">
                @foreach ($authors as $author)
                <li class="text-3xl font-semibold text-fuchsia-900 hover:bg-violet-900 hover:text-yellow-50">
                    <a href="{{route('author', $author->id)}}">{{$author->name}}</a>
                </li>
                <hr class="mx-5 my-5" style="width:50%" , size="4" , color=black>
                @endforeach
            </ul>
        </section>
        <div class=" mx-2 my-10 flex flex-wrap flex-row items-center">
            {{ $authors->links() }}
        </div>
    </div>
</section>

@endsection