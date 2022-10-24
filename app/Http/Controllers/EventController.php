<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->image);
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'date' => 'required',
                'image' => 'required|mimes:png,jpg,jpeg',
                'location' => 'required',
            ]
        );


        $image = base64_encode(file_get_contents($request->file('image')));
        $event = Event::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'image' =>   $image,
            'location' => $request->input('location')
        ]);

        $event->save();
        return redirect('events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $events = Event::all();

        return view('Dashboard.allEvents', ["events" => $events]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $event = Event::find($id);
        // dd($event);
        return view('Dashboard.updateEvent', ['event' => $event, "id" => $id]);
    }

    public function updateEvent(Request $request, $id)
    {
        // dd($request);

        $image = base64_encode(file_get_contents($request->file('image')));
        $event = Event::find($id);

        $event->name = $request->name;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->location = $request->location;
        $event->image = $image;

        $event->save();
        // return redirect('/index');
        return redirect('/events');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // dd($user);
        // load post
        $book = Event::find($id);

        $book->delete();
        return back();
    }

    public function view()
    {
        $event = Event::all();
        // dd($event);
        return view('Events', ["events" => $event]);
    }

    public function eventView($id)
    {
        $event = Event::find($id);
        // dd($event);
        return view('eventView', ["event" => $event]);
    }
}