<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interview;

class InterviewsController extends Controller
{
    public function index()
    {
        $interviews=Interview::orderBy('created_at', 'desc')->get();
        return view('interviewindex',compact(['interviews']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('interviewsadmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $interview= new Interview;
            $interview->user_id=auth()->id();
            $interview->heading=$request->heading;
            $interview->content=$request->content;
            $interview->reporters=$request->reporter;
            $interview->photographer=$request->photographer;

            $this->validate($request, [
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($request->hasFile('image1')) {
                $image = $request->file('image1');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/interviews');
                $image->move($destinationPath, $name);
                $interview->image1='uploads/interviews/'.$name;
                
                
        
            }

            if ($request->hasFile('image2')) {
                $image = $request->file('image2');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/interviews');
                $image->move($destinationPath, $name);
                $interview->image2='uploads/interviews/'.$name;
                
                
        
            }

            if ($request->hasFile('image3')) {
                $image = $request->file('image3');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/interviews');
                $image->move($destinationPath, $name);
                $interview->image3='uploads/interviews/'.$name;
                
                
        
            }
            
            $interview->save();
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
        $interview=Interview::findOrFail($id);
        return view('interview',compact(['interview']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $interview=Interview::findOrFail($id);
        return view('interviewedit',compact(['interview']));
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
        // dd($request);
        $interview=Interview::findOrFail($id);
        $interview->update($request->except(['_token','_method']));

        $interview->user_id=auth()->id();
        $interview->heading=$request->heading;
        $interview->content=$request->content;
        $interview->reporters=$request->reporter;
        $interview->photographer=$request->photographer;

            $this->validate($request, [
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($request->hasFile('image1')) {
                $image = $request->file('image1');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/interviews');
                $image->move($destinationPath, $name);
                $interview->image1='uploads/interviews/'.$name;
                
                
        
            }

            if ($request->hasFile('image2')) {
                $image = $request->file('image2');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/interviews');
                $image->move($destinationPath, $name);
                $interview->image2='uploads/interviews/'.$name;
                
                
        
            }

            if ($request->hasFile('image3')) {
                $image = $request->file('image3');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/interviews');
                $image->move($destinationPath, $name);
                $interview->image3='uploads/interviews/'.$name;
                
                
        
            }
            
            $interview->save();
            return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res=Interview::where('id',$id)->delete();
        return back();

    }
}
