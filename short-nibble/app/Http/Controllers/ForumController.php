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
            'comments' => Comment::orderBy('updated_at','desc')->paginate(5)->onEachSide(0)
        ]);
    }

    public function showUser($id)
    {   
        $user = User::find($id);
        $comments = $user->comments;
        return view('pages.user')->with("user",$user)->with('comments', $comments);
    }

    public function showComment($id)
    {
        $comment = Comment::find($id);
        return view('pages.comment')->with("comment",$comment);
    }

}
