<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function index(Request $request){
        $nav = 'index';  
        return view("index", compact("nav"));
    }
    public function about(Request $request){
        $nav = 'about';  
        return view("about", compact("nav"));
    }
    public function automotive(Request $request){
        $nav = 'solution';  
        return view("automotive", compact("nav"));
    }
    public function charging(Request $request){
        $nav = 'solution';  
        return view("charging", compact("nav"));
    }
    public function motor(Request $request){
        $nav = 'solution';  
        return view("motor", compact("nav"));
    }
    public function battery(Request $request){
        $nav = 'solution';  
        return view("battery", compact("nav"));
    }
    public function contact(Request $request){
        $nav = 'contact';  
        return view("contact", compact("nav"));
    }
}
