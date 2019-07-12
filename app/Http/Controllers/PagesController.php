<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Show;
use App\Interview;

class PagesController extends Controller
{
    public function home(){
    	$events=Event::all();
    	$show=Show::latest()->first();
    	$interviews=Interview::orderBy('created_at', 'desc')->get();
    	return view('home',compact(['events','show','interviews']));
    } 

    public function about(){
    	return view('about');
    } 

    public function gallery(){
    	return view('gallery');
    } 
}