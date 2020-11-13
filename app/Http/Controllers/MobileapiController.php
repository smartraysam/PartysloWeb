<?php

namespace App\Http\Controllers;

use App\Event;
use App\Location;
use App\Notify;
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
        return response()->json([
            'status' => 'OK',
            'result' => $events,
        ]);

    }
    public function getEvent(Request $request)
    {

        $event_id = $request->id;
        $event = Event::where('id', $event_id)
            ->join('eventstats', 'eventstats.event_id', '=', $event_id)->first();
        return response()->json([
            'status' => 'OK',
            'result' => $event,
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

}