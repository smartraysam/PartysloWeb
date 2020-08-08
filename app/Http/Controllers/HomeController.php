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
     
        return view('index');
    }

    public function addEvent(Request $request){

        
    }
    
    public function viewEvent(Request $request){

        return view('event_detail_view');
    }

      
    public function buyTicket(Request $request){

        return view('select_seats');
    }

    public function checkout(Request $request){

        return view('checkout');
    }
    public function confirmPay(Request $request){

        return view('confirmed_order');
    }
    public function getSeat(Request $request){

        
    }


    public function setSeat(Request $request){

        
    }


    public function getNotGoing(Request $request){
        
    }

    public function setNotGoing(Request $request){
        
    }

    public function getMaybe(Request $request){
        
    }

    public function setMaybe(Request $request){
        
    }
    
    public function getLikes(Request $request){
        
    }

    public function setLikes(Request $request){
        
    }
    
      
    public function getShare(Request $request){
        
    }

    public function setShare(Request $request){
        
    }
    public function getComments(Request $request){
        
    }
    

    public function setComments(Request $request){
        
    }
    
    public function getEventOwner(Request $request){
    
        return view('user_dashboard_about');
    }

    public function filterEventView(Request $request){
        
    }

    
    
}