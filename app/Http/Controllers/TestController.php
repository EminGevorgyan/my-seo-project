<?php

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function index(){
        return view('welcome', ['test'=>'My cool laravel app']);
    }
    public function dub(){
        return view('dub', ['inf'=>'We are in de dub page']);
    }
    public function about(){
        return view('about', ['inf'=>'this is the about page']);
    }
}
