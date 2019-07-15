<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event::orderBy('created_at', 'desc')->get();
        return view('eventindex',compact(['events']));
    }

    /**
     * event the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventsadmin');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event= new event;
            $event->user_id=auth()->id();
            $event->heading=$request->heading;
            $event->description=$request->description;

            $event->winners=$request->winners;
            $event->date=$request->date;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/events');
                $image->move($destinationPath, $name);
                $event->image='uploads/events/'.$name;
                
                
        
            }
  
            $event->save();
            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function event($id)
    // {
    //     //
    // }

    /**
     * event the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $event=Event::findOrFail($id);
        return view('eventedit',compact(['event']));
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
        $event=Event::findOrFail($id);
        $event->update($request->except(['_token','_method']));

        $event->user_id=auth()->id();
            $event->heading=$request->heading;
            $event->description=$request->description;

            $event->winners=$request->winners;
            $event->date=$request->date;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/events');
                $image->move($destinationPath, $name);
                $event->image='uploads/events/'.$name;
                
                
        
            }
  
            $event->save();
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
        $res=Event::where('id',$id)->delete();
        return back();
    }
}
