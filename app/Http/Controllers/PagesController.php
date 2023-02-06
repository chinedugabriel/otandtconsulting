<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('/');
    }
    public function services(){
        return view('/services');
    }
    public function About(){
        return view('/about');
    }
    public function contact() {
        return view('pages.contact');
    }

    public function projects(){
        return view('/projects');
    }
    public function carriers(){
        return view('/carriers');
    }

}


// What we do = Service
// Services
// Projects
// Who we are  = about us
// Contact