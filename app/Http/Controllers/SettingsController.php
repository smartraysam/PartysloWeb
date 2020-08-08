<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Response;

class SettingsController extends Controller
{
    //

    public function settheme(Request $request)
    {
        if (Auth::guest()) {
            Session::put('theme', $request->theme);
        } else {
            $user = Auth::user();
            $user->theme = $request->theme;
            $user->save();
            Session::put('theme', $request->theme);
        }
        return Response::json(Session::get('theme'));
    }
}