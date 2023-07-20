<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayController extends Controller
{
    // view
    public function playavatar(){
        return view('play.play');
    }
    // john wich
    public function playjohnwich(){
        return view('play.play3');
    }
    //fast x
    public function playfastx(){
        return view('play.play2');
    }
}
