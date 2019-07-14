<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles=Article::orderBy('created_at', 'desc')->get();
        return view('articleindex',compact(['articles']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articlesadmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article= new article;
            $article->user_id=auth()->id();
            $article->heading=$request->heading;
            $article->content=$request->content;
            $article->writer=$request->writer;

            $this->validate($request, [
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($request->hasFile('image1')) {
                $image = $request->file('image1');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/articles');
                $image->move($destinationPath, $name);
                $article->image1='uploads/articles/'.$name;
                
                
        
            }

            if ($request->hasFile('image2')) {
                $image = $request->file('image2');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/articles');
                $image->move($destinationPath, $name);
                $article->image2='uploads/articles/'.$name;
                
                
        
            }

            if ($request->hasFile('image3')) {
                $image = $request->file('image3');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/articles');
                $image->move($destinationPath, $name);
                $article->image3='uploads/articles/'.$name;
                
                
        
            }
            
            $article->save();
            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article=Article::findOrFail($id);
        return view('article',compact(['article']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
