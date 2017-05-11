<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;
use Response;
use Auth;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
     public function showCreateEvent()
    {
        if(!Auth::check()){
            return redirect()->action('UsersController@displayLogin');
        }

        return view('loggedin.events');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createEvent(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->action('UsersController@displayLogin');
        }

        $rules = [
            'description' => 'required|max:150',
            'date_of_event' => 'required|date',
            'sent_to' => 'required|max:25'
        ]; 

        $this->validate($request, $rules);

        $event = new Event();
        $event->description = $request->description;
        $event->date_of_event = $request->date_of_event;
        $event->created_by = Auth::id();
        $event->sent_to = $request->sent_to;

        $event->save();

        return redirect()->action('EventsController@index');


    }


    public function fullCalendarEvents() {
        $events = Event::where('created_by', '=', Auth::id())->get();


        if($events->isEmpty()) {
            return Response::JSON("Nothing found.");
        }
        foreach($events as $event) {
            return Response::JSON($events);
        }
    }
}
