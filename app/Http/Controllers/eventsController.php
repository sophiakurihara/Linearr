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
        if(Auth::check()) {
            $events = Event::where('created_by', '=', Auth::id())->get();
            return view('loggedin.manage')->with(['events' => $events]);
        }
            return redirect()->action('UsersController@displayLogin');

    }

    public function editEvent(Request $request, $id)
    {
        if(!Auth::check()) 
        {
            return redirect()->action('UsersController@displayHomepage');
        }
        if(isset($request->title) && isset($request->description) && isset($request->date_of_event) && isset($request->sent_to))
        {
            $rules = array(
                'title' => 'max:150',
                'description' => 'max:150',
                'date_of_event' => 'date',
                'sent_to' => 'min:10'
            );
            $this->validate($request, $rules);
            $event = Event::find($id);
            $event->title = $request->title;
            $event->description = $request->description;
            $event->date_of_event = $request->date_of_event;
            $event->sent_to = $request->sent_to;
            $event->save();

            return redirect()->action('EventsController@index');
        }
        return redirect()->action('EventsController@index');
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
            'title' => 'required|max:150',
            'description' => 'required|max:150',
            'date_of_event' => 'required|date',
            'sent_to' => 'required'
        ]; 

        $this->validate($request, $rules);

        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date_of_event = $request->date_of_event;
        $event->created_by = Auth::id();
        $event->sent_to = $request->sent_to;
        // break the phone numbers into an array
        $event->save();

        $phoneNumbers = str_replace('-', '', $request->sent_to);
        $phoneArray = explode(', ', $phoneNumbers);

        foreach($phoneArray as $phoneNumber) {
            $newEvent = $event->title . PHP_EOL . $event->description . PHP_EOL . $event->date_of_event;
            $twilio = new \App\Twilio();
            $twilio->sendText($phoneNumber, $newEvent);            
        }

        return redirect()->action('UsersController@displayHomepage');
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
