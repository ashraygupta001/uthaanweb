<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Show;

class PagesController extends Controller
{
    public function home(){
    	$events=Event::all();
    	$show=Show::latest()->first();
    	return view('home',compact(['events','show']));
    } 

    public function about(){
    	return view('about');
    } 

    public function gallery(){
    	return view('gallery');
    } 
}