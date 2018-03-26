<?php

namespace help_kids_in_CI\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $data = [];
        $data['title'] = "";
        return view('index', $data);
    }

    public function index2(){
        $data = [];
        $data['title'] = "";
        return view('index-2', $data);    
    }

    public function index3(){
        $data = [];
        $data['title'] = "";
        return view('index-3', $data);    
    }

    public function about(){
        $data = [];
        $data['title'] = "About us";
        return view('about', $data);
    }

    public function blogDetails(){
        $data = [];
        $data['title'] = "Blog";
        return view('blog-details', $data);    
    }

    public function blogLarge(){
        $data = [];
        $data['title'] = "Blog";
        return view('blog-large', $data);    
    }

    public function causes(){
        $data = [];
        $data['title'] = "Causes";
        return view('causes', $data);
    }

    public function contact(){
        $data = [];
        $data['title'] = "Contact Us";
        return view('contact', $data);    
    }

    public function error(){
        $data = [];
        $data['title'] = "Error";  
        return view('error', $data);    
    }

    public function eventDetails(){
        $data = [];
        $data['title'] = "Event";
        return view('event-details', $data);
    }

    public function event(){
        $data = [];
        $data['title'] = "Events";
        return view('event', $data);    
    }

    public function shopSingle(){
        $data = [];
        $data['title'] = "Shop-Single";
        return view('shop-single', $data);    
    }

    public function shop(){
        $data = [];
        $data['title'] = "Shop";
        return view('shop', $data);
    }

    public function singleCause(){
        $data = [];
        $data['title'] = "Shop";
        return view('single-cause', $data);    
    }

}
