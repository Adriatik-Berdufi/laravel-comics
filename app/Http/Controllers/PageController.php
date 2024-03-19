<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("home");
    }
    public function character(){
        return view("characters");
    }    
    public function comics(){
        $titles = config('db');
        return view('comics', compact('titles'));
    }
    public function movies(){
        return view('movies');
    }
    public function tv(){
        return view('tv');
    }
    public function games(){
        return view('games');
    }
    public function collectibles(){
        return view('collectibles');
    }
    public function videos(){
        return view('videos');
    }
    public function fans(){
        return view('fans');
    }
    public function news(){
        return view('news');
    }


}
