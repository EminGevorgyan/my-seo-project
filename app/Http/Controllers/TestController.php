<?php

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function index(){
        return view('welcome', ['test'=>'My cool laravel app', 'title'=>'Home']);
    }
    public function dub(){
        return view('dub', ['inf'=>'We are in de dub page', 'title'=>'Dub']);
    }
    public function about(){
        return view('about', ['inf'=>'this is the about page', 'title'=>'About']);
    }

}
