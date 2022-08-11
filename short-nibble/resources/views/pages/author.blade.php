@extends('components.body')
@section('content')


<section class="flex flex-wrap flex-row justify-center">
    <div class="flex flex-wrap flex-col items-center">

        <section>

            
            <br>
            <div class="w-96 mx-5 my-5 px-5 py-3 flex flex-wrap flex-col justify-center">
                <img src="#" alt="some image">
           
                <br>
                <p>{{$author->name}}</p>
                <p>stories published so far:</p>
                <ul style="list-style: none; color:black items-center">
                @foreach ($stories as $story)
                <li class="text-3xl font-semibold text-fuchsia-900 hover:bg-violet-900 hover:text-yellow-50">
                    <a href="#">{{$story->name}}</a>
                </li>
                <hr class="mx-5 my-5" style="width:50%" , size="4" , color=black>
                @endforeach
            </ul>
                
            </div>

        </section>

    </div>
</section>



@endsection