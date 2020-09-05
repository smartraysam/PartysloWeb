<?php

namespace App\Http\Controllers;

use App\Djlist;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function FacebookEventAPI(Request $request)
    {
        $event = Event::create([
            'title' => $request->title,
            'owner' => "0",
            'djlist_id' => $dj_id,
            'description' => $request->description,
            'ticketfee' => $request->ticket,
            'category' => $request->category,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'venuetype' => $request->venuetype,
            'address' => $request->address,
            'address_latitude' => $request->address_latitude,
            'address_longitude' => $request->address_longitude,
            'image' => $imagelink,
            'organizers' => $request->organizers,

        ]);
        $event->save();
        $eventstat = Eventstat::create([
            'event_id' => $event->id,
        ]);
        $eventstat->save();
    }

    public function DJListsApI(Request $request)
    {
        // \Log::info($request);
        $page = (object) $request->page;
        $checkDJ = Djlist::where("name", $request->name)->first();
        if ($checkDJ) {
            return response()->json("DJ exist", 202);
        }
        if ($page) {
            $social = $page->social;
            $location = $page->location;
            $genre = $request->genre;

            $djinfo = Djlist::create([
                'name' => $request->name,
                'link' => $request->link,
                'follower' => $request->follower,
                'genre' => json_encode($genre),
                'music' => $page->music,
                'social' => json_encode($social),
                'location' => json_encode($location),
            ]);

            $djinfo->save();
            return response()->json("Insert successfull", 200);
        } else {
            return response()->json("Error", 201);
        }

    }

    //
}