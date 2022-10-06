@extends('components.layout')
@extends ('components.navbar')
@section('content')

<section class="flex flex-wrap flex-col justify-center items-center">


        <section class=" mx-10 my-5 px-10 py-3 flex flex-wrap flex-col justify-center">
            <h3 class="text-2xl italic text-teal-500"> Story title: {{$comment->story->title}} </h3>
            <a class="ml-5 italic hover:bg-amber-900 hover:text-yellow-50" href="{{route('story', $comment->story->id)}}">Story excerpt: {{Str::words($comment->story->content, 20, '(...)')}} </a>
            <br>
            <div class="px-10 py-3 border-solid border-2 rounded-xl border-amber-100">

                <h1 class="text-3xl font-bold text-amber-700">{{$comment->title}}</h1>
                <p class="text-amber-500">User: {{$comment->user->name}}</p>
                <br>

                <div class="md:w-full mb-2 mt-2 bg-gray-100 rounded border border-gray-400 leading-normal w-100 h-30 py-4 px-6 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">
                    <p> {{$comment->content}} </p>
                </div>
                <p class="text-amber-500">Published: {{$comment->publish_date}}</p>
                <p class="text-amber-500">Last updated: {{$comment->updated_at}}</p>
        </section>
        <section>
            <form method="POST" action="{{route('createcomment', $comment->story_id)}}" class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
                    <div class="w-full md:w-full px-3 mb-2 mt-2">
                        <input class="border bg-gray-100 rounded border-gray-400 resize-none w-full py-2 px-3" type="title" name="title" id="title" placeholder="title" required>
                        <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" type="content" name="content" id="content" placeholder='Type Your Comment' required></textarea>
                    </div>
                    <div class="w-full flex items-start md:w-full px-3">
                        <div class="-mr-1">
                            <input type='submit' class="bg-amber-500 text-white font-medium py-1 px-4 border border-amber-400 rounded-lg tracking-wide mr-1 hover:bg-amber-100 hover:text-amber-800" value='Post Comment'>
                        </div>
                    </div>
            </form>
        </section>
        <section class="flex justify-center">
        <div class="w-2/3 mx-5 my-5 px-5 py-3 flex flex-wrap flex-col justify-center items-center">

                <ul style="list-style: none; color:black items-center">
                    @foreach ($allComments as $comment)
                    <li class="text-xl text-amber-800">
                        <span class="text-xl font-thin text-amber-600p-2">title: {{$comment->title}}</span> <span class="px-2 bg-amber-400 text-white">by: {{$comment->user->name}}</span> 
                        <p>content: {{$comment->content}}</p>
                    </li>
                    <hr class="mx-5 my-5" style="width:50%" , size="4" , color=black>
                    @endforeach
                </ul>

            </div>
        </section>

</section>

@endsection