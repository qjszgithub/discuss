<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function root(){
//        dd(auth()->user()->hasVerifiedEmail());
        return view('pages.root');
    }
}
