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
        $nav = 'automotive';  
        return view("automotive", compact("nav"));
    }
    public function charging(Request $request){
        $nav = 'charging';  
        return view("charging", compact("nav"));
    }
    public function motor(Request $request){
        $nav = 'motor';  
        return view("motor", compact("nav"));
    }
    public function battery(Request $request){
        $nav = 'battery';  
        return view("battery", compact("nav"));
    }
    public function contact(Request $request){
        $nav = 'contact';  
        return view("contact", compact("nav"));
    }
}
