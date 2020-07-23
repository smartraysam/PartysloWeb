<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Supp33ort\Renderable
     */
    public function index()
    {
        if (Auth::guest()) {
            if (!Session::has('theme')) {
                Session::put('theme',  "stylelight.css");
            }
        } else {
            Session::put('theme', Auth::user()->theme);
        }
     
        return view('index', compact('theme'));
    }
    public function settheme(Request $request)
    {
        if (Auth::guest()) {
            Session::put('theme',  $request->theme);
        } else {
            $user = Auth::user();
            $user->theme = $request->theme;
            $user->save();
            Session::put('theme', $request->theme);
        }
        return  Response::json(Session::get('theme'));
    }
}