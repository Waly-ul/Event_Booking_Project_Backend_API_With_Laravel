<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;

class EventsController extends Controller
{
    //

    public function store(Request $request){

        $validation = Validator::make($request->all(),[
            'title' => 'required',
            'ticket_price' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        if($validation->fails()){
            return response()->json([
                'status' => false,
                'message' => "Validation error",
                'errors' => $validation->errors()
            ], 400);
        }

        $event = Event::create([
            'ticket_price' =>$request->ticket_price,
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);

        return response()->json([
            'status' => true,
            'message' => "The creation event was successful.",
            'data' => $event
        ], 200);
    }

    public function events(){
        $events = Event::all();
        return response()->json([
            'status'=> true,
            'message'=> 'Events data',
            'data'=> $events,
        ], 200);
    }


    public function getEvent(Event $event) {
        // $event = data comes from client side
        return response()->json([
            'status'=> true,
            'message'=> 'Event data',
            'data'=> $event,
        ], 200);
    }

    public function updateEvent(Request $request) {
        $validation = Validator::make($request->all(), [
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'ticket_price' => 'required',
        ]);

        if($validation->fails()){
            return response()->json([
                'status'=> false,
                'message'=> 'validation error',
                'errors'=> $validation->errors()
            ], 400);
        }

        $event = Event::findOrFail($request->id);

        $event->update($request->all());

        return response()->json(['message' => 'update success', 'data' => $event]);
    }
}
