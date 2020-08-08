<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function FacebookEventAPI(Request $request)
    {

    }

    public function DJListsApI(Request $requuest)
    {
        return Djlist::create([
            'name' => $requuest->name,
            'link' => $requuest->link,
            'follower' => $requuest->follower,
            'genre' => $requuest->genre,
            'music' => $requuest->music,
            'social' => $requuest->social,
            'location' => $requuest->location,
        ]);

    }

    //
}