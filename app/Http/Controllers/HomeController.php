<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');

    }


   /* public function PostIndex()
    {
        $UserDetails = Post::all();
        $PostDetails = Author::all();

        return view('post', compact('UserDetails', 'PostDetails'));
       //bu kodun yazılma amacı 2 kodu aynı anda welcome adlı view a yönlendirmektir.
    }
   */


}
