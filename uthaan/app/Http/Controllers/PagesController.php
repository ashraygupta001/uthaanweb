<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class PagesController extends Controller
{
    public function home(){
    	$events=Event::all();
    	return view('home')->with('events',$events);
    } 

    public function about(){
    	return view('about');
    } 

    public function gallery(){
    	return view('gallery');
    } 
}