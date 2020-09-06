<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Response;

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
                Session::put('theme', "stylelight.css");
            }
        } else {
            Session::put('theme', Auth::user()->theme);
        }
        $eventsupcoming = Event::join('eventstats', 'eventstats.event_id', "events.id")->paginate(5);
        
        $eventstrending = Event::join('eventstats', 'eventstats.event_id', "events.id")->paginate(5);
        
        $eventsthisweek = Event::join('eventstats', 'eventstats.event_id', "events.id")->paginate(5);

        return view('index', compact('eventsupcoming','eventstrending','eventsthisweek'));
    }
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

    public function viewEvent(Request $request)
    {

        return view('event_detail_view');
    }
    public function buyTicket(Request $request)
    {

        return view('select_seats');
    }
    public function checkout(Request $request)
    {
        return view('checkout');
    }
    public function confirmPay(Request $request)
    {

        return view('confirmed_order');
    }
    public function setNotGoing(Request $request)
    {
    }
    public function getNotGoing(Request $request)
    {

    }
    public function setMaybe(Request $request)
    {
    }
    public function getMaybe(Request $request)
    {
    }

    public function setLikes(Request $request)
    {
    }

    public function getLikes(Request $request)
    {
    }

    public function getShare(Request $request)
    {

    }
    public function setShare(Request $request)
    {
    }
    public function setComments(Request $request)
    {}

    public function getEventOwner(Request $request)
    {

        return view('user_dashboard_about');

    }
    public function filterEventView(Request $request)
    {
    }
}