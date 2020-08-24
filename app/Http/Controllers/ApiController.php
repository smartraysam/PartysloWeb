<?php

namespace App\Http\Controllers;

use App\Djlist;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function FacebookEventAPI(Request $request)
    {

    }

    public function DJListsApI(Request $request)
    {
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