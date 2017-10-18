<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller

    {
            public function DetailofUser($id)
        {
            $UserDetails = Author::find($id);
            return view('post2' , compact('UserDetails'));
        }

    }

