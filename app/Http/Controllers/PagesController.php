<?php

namespace help_kids_in_CI\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function index2(){
        return view('index-2');    
    }

    public function index3(){
        return view('index-3');    
    }

    public function about(){
        return view('about');
    }

    public function blogDetails(){
        return view('blog-details');    
    }

    public function blogLarge(){
        return view('blog-large');    
    }

    public function causes(){
        return view('causes');
    }

    public function contact(){
        return view('contact');    
    }

    public function error(){
        return view('error');    
    }

    public function eventDetails(){
        return view('event-details');
    }

    public function event(){
        return view('event');    
    }

    public function shopSingle(){
        return view('shop-single');    
    }

    public function shop(){
        return view('shop');
    }

    public function singleCause(){
        return view('single-cause');    
    }

}
