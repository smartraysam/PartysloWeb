<?php

namespace App\Http\Controllers;

use App\Category;
use App\Djlist;
use App\Event;
use App\Eventimg;
use App\GooglePlace;
use App\Location;
use App\Notify;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class MobileapiController extends Controller
{
    //
    public function register(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $checkUser = User::whereEmail($email)->first();
        if ($checkUser) {
            return response()->json([
                'status' => "Info",
                'msg' => "Email already registered",
            ]);
        }
        $password = $request->password;
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        $user->save();

    }

    public function login(Request $request)
    {
        $mobileUUID = $request->uuid;
        $fcm_token = $request->token;
        $email = $request->email;
        $password = $request->password;
        if ((Auth::attempt(['email' => $email, 'password' => $password]))) {
            $userLogin = User::whereEmail($email)->select(['name'])->first();
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
        $today = Carbon::today()->format('Y-m-d');
        if ($request->has('city') && $request->has('country')) {
            $city = $request->city;
            $country = $request->country;
            $events = Event::where('address', 'LIKE', '%' . $country . '%')
                ->orWhere('address', 'LIKE', '%' . $city . '%')
                ->where("start_date", '<=', $today)
                ->where("end_date", '>=', $today)
                ->paginate(20);
            if ($events->isEmpty()) {
                return response()->json([
                    'status' => 'Info',
                    'result' => $events,
                ]);
            }
            return response()->json([
                'status' => 'OK',
                'result' => $events,
            ]);
        } else {
            return response()->json([
                'status' => 'Info',
                'result' => response()->json(["event" => "invalid request"]),
            ]);
        }

    }

    public function getEvent(Request $request)
    {
       \Log::info(URL::to('/'));
        $event_id = $request->id;
        $event = Event::where('events.id', '=', $event_id)
            ->join('eventstats', 'eventstats.event_id', '=', 'events.id')->first();

        $djs = array();
        $djids = json_decode($event->djlist_id);
        foreach ($djids as $key => $value) {
            if (is_numeric($value)) {
                if ($value == 0) {
                    $genre = array("Others");
                    $social = array("Others");
                    $location = array("Others");
                    $dj = new Djlist;
                    $dj->name = "Other";
                    $dj->image = "https://fandf-si7mj9eju7kjbgtgaeu.netdna-ssl.com/wp-content/uploads/2018/01/What-Is-A-DJ-1080x675.jpg";
                    $dj->link = "https://thedjlist.com/";
                    $dj->follower = "0";
                    $dj->genre = json_encode($genre);
                    $dj->music = "Other";
                    $dj->social = json_encode($social);
                    $dj->location = json_encode($location);
                    array_push($djs, $dj);
                } else {
                    $dj = Djlist::where('id', '=', $value)->first();
                    array_push($djs, $dj);
                }

            } else {
                $genre = array("Others");
                $social = array("Others");
                $location = array("Others");
                $dj = new Djlist;
                $dj->name = $value;
                $dj->image = "https://fandf-si7mj9eju7kjbgtgaeu.netdna-ssl.com/wp-content/uploads/2018/01/What-Is-A-DJ-1080x675.jpg";
                $dj->link = "https://thedjlist.com/";
                $dj->follower = "0";
                $dj->genre = json_encode($genre);
                $dj->music = "Other";
                $dj->social = json_encode($social);
                $dj->location = json_encode($location);
                array_push($djs, $dj);
            }
        }

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
    public function getPlacebyid(Request $request)
    {
        $eventid = $request->id;
        $location = GooglePlace::where('event_id', "=", $eventid)
            ->select("data", "address", "name")->first();
        return response()->json([
            'status' => 'OK',
            'place' => $location,
        ]);
    }
    public function getSuggestion(Request $request)
    {
        $today = Carbon::today()->format('Y-m-d');
        $address = $request->address;
        $name = $request->name;
        $events = Event::where('address', 'LIKE', '%' . $address . '%')->orWhere('venue', 'LIKE', '%' . $name . '%')
            ->where("start_date", '<=', $today)
            ->where("end_date", '>=', $today)
            ->join('eventstats', 'eventstats.event_id', '=', 'events.id')->limit(10)->get();
        if ($events->isEmpty()) {
            return response()->json([
                'status' => 'Info',
                'eventdetails' => $events,
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
        $todayTime = date('H:m');
        $country = $request->location;
        // $city = $location[0];
        // $country= $location[1];
        $all = Event::where('address', 'LIKE', '%' . $country . '%')
        //    ->orWhere('address', 'LIKE', '%' . $city . '%')
            ->join('eventstats', 'eventstats.event_id', '=', 'events.id')->count();
        $runnow = Event::where('address', 'LIKE', '%' . $country . '%')
        // ->orWhere('address', 'LIKE', '%' . $city . '%')
            ->whereDate("start_date", '<=', $today)
            ->whereDate("end_date", '>=', $today)
            ->whereTime("start_time", '<=', $todayTime)
            ->whereTime("end_time", '>=', $todayTime)->count();
        $runToday = Event::where('address', 'LIKE', '%' . $country . '%')
        //  ->orWhere('address', 'LIKE', '%' . $city . '%')
            ->whereDate("start_date", '<=', $today)
            ->whereDate("end_date", '>=', $today)->count();
        $runTomorrow = Event::where('address', 'LIKE', '%' . $country . '%')
        //  ->orWhere('address', 'LIKE', '%' . $city . '%')
            ->whereDate("end_date", '>=', $tomorrow)->count();
        $runthisWeek = Event::where('address', 'LIKE', '%' . $country . '%')
        //  ->orWhere('address', 'LIKE', '%' . $city . '%')
            ->where("end_date", '>', $sweek)
            ->count();
        $runthisWeekend = Event::where('address', 'LIKE', '%' . $country . '%')
        // ->orWhere('address', 'LIKE', '%' . $city . '%')
            ->where("start_date", '=', $weekendf)
            ->orWhere("end_date", '>=', $weekendf)->count();
        $runNextweek = Event::where('address', 'LIKE', '%' . $country . '%')
        //  ->orWhere('address', 'LIKE', '%' . $city . '%')
            ->whereDate("end_date", '>', $edate)->count();
        $app = app();
        $filter = $app->make('stdClass');
        $filter->all = $all;
        $filter->now = $runnow;
        $filter->today = $runToday;
        $filter->tomorrow = $runTomorrow;
        $filter->thisweek = $runthisWeek;
        $filter->nextweek = $runNextweek;
        return response()->json([
            'status' => 'OK',
            'filter' => $filter,
        ]);
    }

    public function getCategory(Request $request)
    {
        $today = Carbon::today();
        $todayTime = Carbon::now()->format("H:i");
        $category = Category::select("name")->get();
        $country = $request->address;
        $Categorydata = array();
        $index = 0;

        foreach ($category as $key => $value) {
            $eventstotal = Event::where('address', 'LIKE', '%' . $country . '%')
                ->join('djlists', 'djlists.id', '=', 'events.djlist_id')->where('genre', 'LIKE', '%' . $value->name . '%')->count();

            $eventsrun = Event::where('address', 'LIKE', '%' . $country . '%')
                ->whereDate("start_date", '<=', $today)
                ->whereDate("end_date", '>=', $today)
                ->whereTime("start_time", '<=', $todayTime)
                ->whereTime("end_time", '>=', $todayTime)
                ->join('djlists', 'djlists.id', '=', 'events.djlist_id')->where('genre', 'LIKE', '%' . $value->name . '%')->count();

            $Categorydata[$index] = $value;
            $Categorydata[$index]->running = $eventsrun;
            $Categorydata[$index]->total = $eventstotal;
            $index++;

        }

        if (!$Categorydata) {
            return response()->json([
                'status' => 'Info',
                'category' => $Categorydata,
            ]);
        }
        return response()->json([
            'status' => 'OK',
            'category' => $Categorydata,
        ]);
    }

    public function getNearby(Request $request)
    {
        $today = Carbon::today()->format('Y-m-d');
        $nearbykeyword = $request->nearby;
        $events = Event::where('address', 'LIKE', '%' . $nearbykeyword . '%')->orWhere('venue', 'LIKE', '%' . $nearbykeyword . '%')
            ->where("start_date", '<=', $today)
            ->where("end_date", '>=', $today)->paginate(10);
        if ($events->isEmpty()) {
            return response()->json([
                'status' => 'Info',
                'result' => $events,
            ]);
        }
        return response()->json([
            'status' => 'OK',
            'result' => $events,
        ]);
    }

    public function getSearch(Request $request)
    {
        $today = Carbon::today()->format('Y-m-d');
        $query = $request->keyword;
        $address = $request->location;
        $events = Event::where('address', 'LIKE', '%' . $address . '%')->orWhere('venue', 'LIKE', '%' . $query . '%')
            ->orWhere('title', 'LIKE', '%' . $query . '%')
            ->where("start_date", '<=', $today)
            ->where("end_date", '>=', $today)
            ->join('eventstats', 'eventstats.event_id', '=', 'events.id')->limit(10)->get();
        if ($events->isEmpty()) {
            return response()->json([
                'status' => 'Info',
                'eventsdetails' => $events,
            ]);
        }
        return response()->json([
            'status' => 'OK',
            'eventsdetails' => $events,
        ]);
    }
    public function getSearchEvent(Request $request)
    {
        $today = Carbon::today()->format('Y-m-d');
        $event_id = $request->id;
        $title = $request->title;
        $event = Event::where('id', '=', $event_id)
            ->where("title", $title)
            ->where("start_date", '<=', $today)
            ->where("end_date", '>=', $today)->paginate(1);
        return response()->json([
            'status' => 'OK',
            'result' => $event,
        ]);

    }

}