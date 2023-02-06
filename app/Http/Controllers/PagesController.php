<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function services(){
        return view('/pages.services');
    }
    public function about(){
        return view('/pages.about');
    }
    public function contact() {
        return view('pages.contact');
    }

    public function projects(){
        return view('/pages.projects');
    }
    public function carriers(){
        return view('/pages.carriers');
    }

}


// What we do = Service
// Services
// Projects
// Who we are  = about us
// Contact