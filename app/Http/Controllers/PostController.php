<?php

namespace App\Http\Controllers;

use App\Post;
use App\Author;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function PostAll()
    {
        $posts  = \DB::table('posts')
            ->orderBy('id', 'desc')
            //->limit('2')
            ->get();
        return view('welcome',    compact('posts'));
    }

 
    public function GalleryAll()
    {
        $posts  = \DB::table('posts')
            ->orderBy('id', 'desc')
            //->limit('2')
            ->get();
        return view('Gallery',    compact('posts'));
    }




      public function DetailofPost($id)
    {
        $PostDetails = Post::where('slug', $id)->first();;
        $AuthorDetails = Author::find($PostDetails->author_id);
        $Latests = \DB::table('posts')
            ->orderBy('id', 'desc')
            ->Limit('3')
            ->get();
        return view('/post2' , compact('PostDetails', 'AuthorDetails' , "Latests" ));
    }

     public function findnews()
     {

        return view('sputnik');
     }

}



