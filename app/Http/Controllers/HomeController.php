<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // view
    public function showHome(){
        return view('fontend.home');
    }
    //phimle
    public function showphimle(){
        return view('movies.phimle');
    }
    //phimle
    public function showphimbo(){
        return view('movies.phimbo');
    }
    //phimle
    public function showphimmoi(){
        return view('movies.phimmoi');
    }
    //phimle
    public function showphimchieurap(){
        return view('movies.phimchieurap');
    }
}
