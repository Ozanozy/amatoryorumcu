<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function PostComment(Request $request)
    {
        $test1 = $request->all();
        //$test1['sahip_id']=\Auth::id();
        $comment = new Comment();
        $comment->create($test1);
        return view('post2', compact("test1"));
    }

    
    public function comment_all()
    {
        $comments = Comment::all();
        return view('post2{id}', compact("comments"));
    }
    
}