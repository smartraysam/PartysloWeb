<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use App\Eventdjs;
use App\Eventimg;
use App\GooglePlace;
use App\Location;
use App\Notify;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MobileapiController extends Controller
{
    //
    public function register(Request $request)
    {

        $name->$request->name;
        $email->$request->email;
        $password->$request->password;
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        $user->save();
        return response()->json([
            'status' => "Ok",
        ]);
    }

    public function login(Request $request)
    {
        $mobileUUID = $request->uuid;
        $fcm_token = $request->token;
        $email = $request->email;
        $password = $request->password;

        if ((Auth::attempt(['email' => $email, 'password' => $password]))) {
            $userLogin = User::whereEmail($email)->select(['name', 'role', 'image', 'dashboard_id'])->first();
            $checknotify = Notify::where("mobile_uid", $mobileUUID)->first();
            if ($checknotify) {
                $checknotify->fcm_token = $fcm_token;
                $checknotify->save();
            } else {
                $notify = Notify::create([
                    'mobile_uid' => $mobileUUID,
                    'user_id' => $userLogin->id,
                    'email' => $email,
                    'fcm_token' => $fcm_token,
                ]);
                $notify->save();
            }

            return response()->json([
                'status' => "Ok",
                'userInfo' => $userLogin,
            ]);
        } else {
            return response()->json([
                'status' => "Error",
                'message' => 'Unauthorized User',
            ]);
        }
    }

    public function loadEvents(Request $request)
    {
        $location = $request->location;
        $events = Event::where('address', 'LIKE', '%' . $location . '%')->paginate(20);
        if ($events->isEmpty()) {
            return response()->json([
                'status' => 'Info',
                'result' => 'No result',
            ]);
        }
        return response()->json([
            'status' => 'OK',
            'result' => $events,
        ]);

    }

    public function getEvent(Request $request)
    {
        $event_id = $request->id;
        $event = Event::where('events.id', '=', $event_id)
            ->join('eventstats', 'eventstats.event_id', '=', 'events.id')->first();
        $djs = Eventdjs::where('event_id', '=', $event_id)
            ->join('djlists', 'djlists.id', '=', 'eventdjs.djlist_id')->get();
        $images = Eventimg::where('event_id', '=', $event_id)->select(['image'])->get();
        return response()->json([
            'status' => 'OK',
            'eventdetails' => $event,
            'djs' => $djs,
            'images' => $images,
        ]);

    }
    public function getDj(Request $request)
    {
        $dj_id = $request->djid;
        $dj = Djlist::where('id', $dj_id)->first();
        return response()->json([
            'status' => 'OK',
            'result' => $dj,
        ]);

    }
    public function getLocation(Request $request)
    {
        $name = $request->name;
        $address = $request->address;
        $location = Location::where('name', 'LIKE', '%' . $name . '%')
            ->where('address', 'LIKE', '%' . $address . '%')->first();
        return response()->json([
            'status' => 'OK',
            'result' => $location,
        ]);
    }
    public function getPlace(Request $request)
    {
        $address = $request->address;
        $name = $request->name;
        $location = GooglePlace::where('name', 'LIKE', '%' . $name . '%')
            ->where('address', 'LIKE', '%' . $address . '%')->select("data", "address", "name")->first();
        return response()->json([
            'status' => 'OK',
            'place' => $location,
        ]);
    }
    public function getSuggestion(Request $request)
    {
        $address = $request->address;
        $name = $request->name;
        $events = Event::where('address', 'LIKE', '%' . $address . '%')->orWhere('venue', 'LIKE', '%' . $name . '%')
            ->join('eventstats', 'eventstats.event_id', '=', 'events.id')->limit(10)->get();
        if ($events->isEmpty()) {
            return response()->json([
                'status' => 'Info',
                'eventdetails' => 'No result',
            ]);
        }
        return response()->json([
            'status' => 'OK',
            'eventdetails' => $events,
        ]);
    }

    // not yet implement
    public function getFilter(Request $request)
    {
        $today = Carbon::today();
        $tomorrow = Carbon::tomorrow();
        $sweek = Carbon::parse('this sunday')->toDateString();
        $eweek = Carbon::parse('this saturday')->toDateString();
        $sdate = Carbon::parse('this monday')->toDateString();
        $edate = Carbon::parse('next sunday')->toDateString();
        $weekendf = new Carbon('this friday');
        $weekends = new Carbon('this saturday');
        $todayTime = date('H:m:i');
        $location = $request->location;
        $all = Event::where('address', 'LIKE', '%' . $location . '%')
            ->join('eventstats', 'eventstats.event_id', '=', 'events.id')->count();
        $runnow = Event::where('address', 'LIKE', '%' . $location . '%')
            ->whereDate("start_date", '>=', $today)
            ->whereDate("end_date", '<=', $today)
            ->whereDate("start_time", '>=', $todayTime)
            ->whereDate("end_time", '<=', $todayTime)->count();
        $runToday = Event::where('address', 'LIKE', '%' . $location . '%')
            ->whereDate("start_date", '>=', $today)
            ->whereDate("start_date", '<=', $today)->count();
        $runTomorrow = Event::where('address', 'LIKE', '%' . $location . '%')
            ->whereDate("start_date", '==', $tomorrow)->count();
        $runthisWeek = Event::where('address', 'LIKE', '%' . $location . '%')
            ->where("start_date", '>=', $sweek)
            ->where("start_date", '<=', $eweek)->count();
        $runthisWeekend = Event::where('address', 'LIKE', '%' . $location . '%')
            ->where("start_date", '==', $weekendf)
            ->orwhere("start_date", '==', $weekendf)->count();
        $runNextweek = Event::where('address', 'LIKE', '%' . $location . '%')
            ->whereDate("start_date", '>', $sdate)
            ->whereDate("start_date", '<', $edate)->count();
        return response()->json([
            'status' => 'OK',
            'all' => $all,
            'now' => $runnow,
            'today' => $runToday,
            'tomorrow' => $runTomorrow,
            'thisweek' => $runthisWeek,
            'nextweek' => $runNextweek,
        ]);
    }

    public function getCategory(Request $request)
    {
        $today = Carbon::today();
        $todayTime = date('H:m:i');
        $category = Category::all();
        $address = $request->address;
       
        $Categorydata = array();
        $index = 0;

        foreach ($category as $key => $value) {
            # code...
            $eventstotal = Event::where('address', 'LIKE', '%' . $address . '%')
                ->join('eventdjs', 'eventdjs.event_id', '=', 'events.id')
                ->join('djlists', 'djlists.id', '=', 'eventdjs.djlist_id')->where('genre', 'LIKE', '%' . $value->name . '%')->count();
            $eventsrun = Event::where('address', 'LIKE', '%' . $address . '%')
                ->whereDate("start_date", '>=', $today)
                ->whereDate("end_date", '<=', $today)
                ->whereDate("start_time", '>=', $todayTime)
                ->whereDate("end_time", '<=', $todayTime)
                ->join('eventdjs', 'eventdjs.event_id', '=', 'events.id')
                ->join('djlists', 'djlists.id', '=', 'eventdjs.djlist_id')->where('genre', 'LIKE', '%' . $value->name . '%')->count();

            $Categorydata[$index] = $value;
            $Categorydata[$index]->running = $eventsrun;
            $Categorydata[$index]->total = $eventstotal;
            $index++;

        }

        if ($Categorydata->isEmpty()) {
            return response()->json([
                'status' => 'Info',
                'category' => 'No result',
            ]);
        }
        return response()->json([
            'status' => 'OK',
            'category' => $Categorydata,
        ]);
    }

    public function getNearby(Request $request)
    {
        $nearbykeyword = $request->nearby;
        $events = Event::where('address', 'LIKE', '%' . $nearbykeyword . '%')->orWhere('venue', 'LIKE', '%' . $nearbykeyword . '%')
            ->join('eventstats', 'eventstats.event_id', '=', 'events.id')->paginate(10)->get();
        if ($events->isEmpty()) {
            return response()->json([
                'status' => 'Info',
                'eventdetails' => 'No result',
            ]);
        }
        return response()->json([
            'status' => 'OK',
            'eventdetails' => $events,
        ]);
    }

    public function getSearch(Request $request)
    {
        $query = $request->keyword;
        $events = Event::where('address', 'LIKE', '%' . $query . '%')->orWhere('venue', 'LIKE', '%' . $query . '%')
            ->orWhere('name', 'LIKE', '%' . $query . '%')
            ->join('eventstats', 'eventstats.event_id', '=', 'events.id')->limit(10)->get();
        if ($events->isEmpty()) {
            return response()->json([
                'status' => 'Info',
                'eventdetails' => 'No result',
            ]);
        }
        return response()->json([
            'status' => 'OK',
            'eventdetails' => $events,
        ]);
    }

}