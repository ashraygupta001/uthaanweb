<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Show;
use App\Interview;
use App\Article;
use App\User;

class PagesController extends Controller
{
    public function welcome(){
    	$events=Event::all();
    	$show=Show::latest()->first();
    	$interviews=Interview::orderBy('created_at', 'desc')->get();
        $articles=Article::orderBy('created_at', 'desc')->get();
    	return view('welcome',compact(['events','show','interviews','articles']));
    } 

    public function about(){
    	return view('about');
    } 

    public function gallery(){
    	return view('gallery');
    } 

}