<?php

namespace App\Http\Controllers;


use App\Gallery;
//use App\GalleryImages;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function GalleryAll()

    {
        $gallers = \DB::table('galleries')
            ->orderBy('id', 'desc')
            ->get();
        return view('welcome', compact('gallers'));
    }

   public function findgaleri()
     {

        return view('Gallery');
     }


    public function GalleryImages()
    {
        $galerimages = \DB::table('galleryimg')
            ->orderBY('id', 'desc')
            ->get();
        return view('welcome', compact('galerimages'));
    }
}