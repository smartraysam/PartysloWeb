<?php

namespace App\Http\Controllers;

use App\Category;
use App\Djlist;
use App\Event;
use App\Eventimg;
use App\Eventstat;
use App\GooglePlace;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiController extends Controller
{
    public function FacebookEventAPI(Request $request)
    {
        $djlist_id = array();
        $category_list = array();
        $checkEvent = Event::where("title", $request->title)->first();
        $djs = Djlist::select(["id", "name", "genre"])->get();
        $category = Category::select("id", "name")->get();
        foreach ($djs as $key => $value) {
            if (Str::contains($request->description, $value->name)) {
                \Log::info("true");
                array_push($djlist_id, $value->id);
                $genre = json_decode($value->genre);
                $category_list = array_unique(array_merge($category_list, $genre), SORT_REGULAR);
            }
        }
        foreach ($category as $key => $value) {
            if (Str::contains($request->description, $value->name)) {
                array_push($category_list, $value->name);
            }
        }
        if (count($djlist_id) == 0) {
            array_push($djlist_id, 0);
        }
        if (count($category_list) == 0) {
            array_push($category_list, "Others");
        }

        if ($checkEvent) {
            $checkEvent->djlist_id = json_encode($djlist_id);
            $checkEvent->category = json_encode($category_list);
            $checkEvent->save();
            \Log::info("202");
            return response()->json("Event exist", 202);
        }

        $event = Event::create([
            'title' => $request->title,
            'owner' => "0",
            'djlist_id' => json_encode($djlist_id),
            'description' => $request->description,
            'ticketfee' => "Ticket Link",
            'category' => json_encode($category_list),
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'venue' => $request->venue,
            'address' => $request->address,
            'address_latitude' => $request->address_latitude,
            'address_longitude' => $request->address_longitude,
            'image' => $request->imagelink,
            'organizers' => $request->organizers,
            'organizerlink' => $request->organizerslink,
        ]);

        $event->save();
        $placeid = $request->address_placeid;
        $venue = $request->venue;
        $address = $request->address;
        $feature_img = $request->imagelink;
        $event_id = $event->id;
        $eventstat = Eventstat::create([
            'event_id' => $event_id,
        ]);
        $eventimg = Eventimg::create([
            'event_id' => $event_id,
            'image' => $feature_img,
        ]);
        $eventimg->save();
        $eventstat->save();
        $this->getPlaceDetails($placeid, $event_id, $venue, $address);
        \Log::info("200");
        return response()->json("Event added", 200);
    }

    public function getPlaceDetails($placeid, $eventid, $venue, $address)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('https://maps.googleapis.com/maps/api/place/details/json?placeid=' . $placeid . '&fields=name,rating,formatted_phone_number,icon,types,url,website,opening_hours,price_level,business_status,formatted_address&key=AIzaSyBeuR3UL5jXHRmwVFO4R9NyR6A0pjOvzt0');
        $response = $request->getBody();
        $place = GooglePlace::create([
            'event_id' => $eventid,
            'name' => $venue,
            'address' => $address,
            'data' => $response,
        ]);
        $place->save();
    }
    public function DJListsApI(Request $request)
    {
        $page = (object) $request->page;
        $checkDJ = Djlist::where("name", $request->name)->first();
        if ($checkDJ) {
            if ($page) {
                $checkDJ->image = $page->image;
                $checkDJ->save();
            }
            return response()->json("DJ exist", 202);
        }
        if ($page) {
            $social = $page->social;
            $location = $page->location;
            $genre = $request->genre;
            $djinfo = Djlist::create([
                'name' => $request->name,
                'image' => $page->image,
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