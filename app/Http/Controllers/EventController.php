<?php

namespace App\Http\Controllers;

use App\Category;
use App\Djlist;
use App\Event;
use App\Eventstat;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;

class EventController extends Controller
{
    use UploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $events = Event::join('eventstats', 'eventstats.event_id', "events.id")->paginate(8);
        if ($request->ajax()) {
            return response()->json($events);
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_new_event');
    }
    public function autocomplete(Request $request)
    {
        $str = $request->get('query');
        $data = Djlist::select("name")
            ->where('name', 'LIKE', '%' . $str . '%')
            ->get();
        return response()->json($data);
    }

    public function uploadImage($request)
    {
        if ($request->has('event_image')) {
            // Get image file

            $image = $request->file('event_image');
            // Make a image name based on user name and current timestamp

            $imgname = str_replace(' ', '', $request->title);

            // Define folder path
            $folder = 'images/events/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $imagelink = 'images/events/' . $imgname . '.' . $image->getClientOriginalExtension();
            // Upload image

            $this->uploadOne($image, $folder, 'public', $imgname);
            // Set user profile image path in database to filePath
        }

        return $imagelink;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $imagelink = $this->uploadImage($request);
        $dj_id = Djlist::where("name", $request->dj)->value("id");
        if (!$dj_id) {
            $dj_id = 0;
        }
        $event = Event::create([
            'title' => $request->title,
            'owner' => Auth::user()->id,
            'djlist_id' => $dj_id,
            'description' => $request->description,
            'ticketfee' => $request->ticket,
            'category' => $request->category,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'venuetype' => $request->venuetype,
            'address' => $request->address,
            'address_latitude' => $request->address_latitude,
            'address_longitude' => $request->address_longitude,
            'image' => $imagelink,
            'organizers' => $request->organizers,

        ]);
        $event->save();
        $eventstat = Eventstat::create([
            'event_id' => $event->id,
        ]);
        $eventstat->save();
        return redirect()->back()->with('status', 'Operation Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }

    public function categorysearchcomplete(Request $request)
    {
        $str = $request->get('query');
        $data = Category::select("name")
            ->where('name', 'LIKE', '%' . $str . '%')
            ->get();
        return response()->json($data);
    }

}