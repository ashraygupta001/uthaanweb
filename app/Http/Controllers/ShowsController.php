<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Show;

class ShowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shows=Show::orderBy('created_at', 'desc')->get();
        return view('show',compact(['shows']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('showsadmin');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $show= new show;
            $show->user_id=auth()->id();
            $show->heading=$request->heading;
            $show->description=$request->description;

            $show->show_type=$request->show_type;
            $show->link=$request->link;
            if ($request->hasFile('thumbnail')) {
                $image = $request->file('thumbnail');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/shows');
                $image->move($destinationPath, $name);
                $show->thumbnail='uploads/shows/'.$name;
                
                
        
            }
  
            $show->save();
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
        $show=Show::findOrFail($id);
        $show_type=Show::where('show_type',$show->show_type)->get();
        $plays=$show_type;
        return view('player',compact(['show','plays']));
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
