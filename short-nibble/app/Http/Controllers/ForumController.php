<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {

        return view('pages.forum', $comments = [
            'comments' => Comment::orderBy('updated_at', 'desc')->paginate(5)->onEachSide(0),
        ]);
    }

    public function showUser($id)
    {
        $user = User::find($id);
        $comments = $user->comments;
        return view('pages.user')->with("user", $user)->with('comments', $comments);
    }

    public function showComment($id)
    {

        $storyIdArray = Comment::get()->where('id', $id)->pluck('story_id');
        $storyId = $storyIdArray[0];
        // dd($id, $storyId, $test);
        $allComments = Comment::where('story_id', $storyId)->orderBy('updated_at', 'DESC')->get();
        //dd($storyId, $allComments);
        // dd(Comment::find($id)); ;

        $comment = Comment::find($id);
        //dd($comment->title);
        return view('pages.comment')->with([
            "comment" => $comment,
            "allComments" => $allComments,
        ]);
    }

    public function createComment($storyId)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        // dd($storyId);

        $comment = Comment::create([
            'user_id' => auth()->user()->id,
            'story_id' => $storyId,
            'title' => request('title'),
            'content' => request('content'),
        ]);

        return back();
    }
}
