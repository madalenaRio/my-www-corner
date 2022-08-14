@extends('components.layout')
@section('content')

<section class="m-5 flex flex-wrap flex-row justify-center">
    <div class="flex flex-wrap flex-col items-center">
        <section class="items-center">
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
    </div>
</section>

@endsection