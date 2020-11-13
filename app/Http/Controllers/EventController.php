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

        $eventsupcoming = Event::join('eventstats', 'eventstats.event_id', "events.id")->paginate(5);

        $eventstrending = Event::join('eventstats', 'eventstats.event_id', "events.id")->paginate(5);

        $eventsupthisweek = Event::join('eventstats', 'eventstats.event_id', "events.id")->paginate(5);
        $set_output = "";
        if ($request->type == 'upcoming') {
            if (!$eventsupcoming->isEmpty()) {
                foreach ($eventsupcoming as $event) {
                    $set_output .= '
                    <div class="event-main-post">
                        <div class="event-top">
                            <div class="event-top-left">
                                <a href="/event">
                                    <h4>Event Title Here</h4>
                                </a>
                            </div>
                            <div class="event-top-right">
                                <div class="ticket-price">Ticket Price : <span>$15</span></div>
                                <div class="post-dt-dropdown dropdown">
                                    <span class="dropdown-toggle-no-caret" role="button"
                                        data-toggle="collapse" data-target="#eventDropdown"><i
                                            class="fas fa-ellipsis-v"></i></span>
                                    <div class="dropdown-menu post-rt-dropdown dropdown-menu-right"
                                        id="eventDropdown">
                                        <a class="post-link-item" href="#">Hide</a>
                                        <a class="post-link-item" href="/event">Details</a>
                                        <a class="post-link-item" href="/user">User Profile</a>
                                        <a class="post-link-item" href="#">Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-main-image">
                            <div class="main-photo">
                                <div class="photo-overlay"></div>
                                <img src="images/homepage/center/post-img-1.jpg" alt="">
                                <div class="post-buttons">
                                    <div class="left-buttons">
                                        <ul class="main-btns">
                                            <li><button class="main-btn-link"
                                                    onclick="window.location.href=\'/buyticket\';">Buy
                                                    Ticket</button></li>
                                            <li><button class="main-btn-link btn-hide"
                                                    onclick="window.location.href=\'#\';">May
                                                    Be</button></li>
                                        </ul>
                                    </div>
                                    <div class="right-buttons">
                                        <ul class="main-btns">
                                            <li><button class="main-btn-link btn-hide"
                                                    onclick="window.location.href = "#";">450
                                                    Seats</button></li>
                                            <li><button class="main-btn-link btn-hide"
                                                    onclick="window.location.href = "#";">Can\'t
                                                    Go</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-city-dt">
                            <ul class="city-dt-list">
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="list-text-dt">
                                            <span>City</span>
                                            <ins>London</ins>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-calendar-alt"></i>
                                        <div class="list-text-dt">
                                            <span>Date</span>
                                            <ins>21 Nov 2019</ins>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-clock"></i>
                                        <div class="list-text-dt">
                                            <span>Time</span>
                                            <ins>6 PM to 9 PM</ins>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-cloud-sun"></i>
                                        <div class="list-text-dt">
                                            <span>Weather</span>
                                            <ins>Clear</ins>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="event-go-dt">
                            <ul class="go-dt-list">
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                        <div class="list-text-dt">
                                            <span>Going</span>
                                            <ins>45</ins>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-question-circle"
                                            style="color:#a7a8aa;"></i>
                                        <div class="list-text-dt">
                                            <span>MayBe</span>
                                            <ins>120</ins>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                        <div class="list-text-dt">
                                            <span>Can\'t Go</span>
                                            <ins>70</ins>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="like-comments">
                            <div class="left-comments">
                                <a href="#" class="like-item" title="Like">
                                    <i class="fas fa-heart"></i>
                                    <span><ins>Like</ins> 251</span>
                                </a>
                                <a href="#" class="like-item lc-left" title="Comment">
                                    <i class="fas fa-comment-alt"></i>
                                    <span><ins>Comment</ins> 10</span>
                                </a>
                            </div>
                            <div class="right-comments">
                                <a href="#" class="like-item" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                    <span><ins>Share</ins> 21</span>
                                </a>
                            </div>
                        </div>
                    </div>';
                }
                echo $set_output;
            }
        } else if ($request->type == 'trending') {
            if (!$eventsuptrending->isEmpty()) {
                foreach ($eventsuptrending as $event) {
                    $set_output .= '
                    <div class="event-main-post">
                        <div class="event-top">
                            <div class="event-top-left">
                                <a href="/event">
                                    <h4>Event Title Here</h4>
                                </a>
                            </div>
                            <div class="event-top-right">
                                <div class="ticket-price">Ticket Price : <span>$15</span></div>
                                <div class="post-dt-dropdown dropdown">
                                    <span class="dropdown-toggle-no-caret" role="button"
                                        data-toggle="collapse" data-target="#eventDropdown"><i
                                            class="fas fa-ellipsis-v"></i></span>
                                    <div class="dropdown-menu post-rt-dropdown dropdown-menu-right"
                                        id="eventDropdown">
                                        <a class="post-link-item" href="#">Hide</a>
                                        <a class="post-link-item" href="/event">Details</a>
                                        <a class="post-link-item" href="/user">User Profile</a>
                                        <a class="post-link-item" href="#">Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-main-image">
                            <div class="main-photo">
                                <div class="photo-overlay"></div>
                                <img src="images/homepage/center/post-img-1.jpg" alt="">
                                <div class="post-buttons">
                                    <div class="left-buttons">
                                        <ul class="main-btns">
                                            <li><button class="main-btn-link"
                                                    onclick="window.location.href=\'/buyticket\';">Buy
                                                    Ticket</button></li>
                                            <li><button class="main-btn-link btn-hide"
                                                    onclick="window.location.href=\'#\';">May
                                                    Be</button></li>
                                        </ul>
                                    </div>
                                    <div class="right-buttons">
                                        <ul class="main-btns">
                                            <li><button class="main-btn-link btn-hide"
                                                    onclick="window.location.href = "#";">450
                                                    Seats</button></li>
                                            <li><button class="main-btn-link btn-hide"
                                                    onclick="window.location.href = "#";">Can\'t
                                                    Go</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-city-dt">
                            <ul class="city-dt-list">
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="list-text-dt">
                                            <span>City</span>
                                            <ins>London</ins>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-calendar-alt"></i>
                                        <div class="list-text-dt">
                                            <span>Date</span>
                                            <ins>21 Nov 2019</ins>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-clock"></i>
                                        <div class="list-text-dt">
                                            <span>Time</span>
                                            <ins>6 PM to 9 PM</ins>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-cloud-sun"></i>
                                        <div class="list-text-dt">
                                            <span>Weather</span>
                                            <ins>Clear</ins>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="event-go-dt">
                            <ul class="go-dt-list">
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                        <div class="list-text-dt">
                                            <span>Going</span>
                                            <ins>45</ins>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-question-circle"
                                            style="color:#a7a8aa;"></i>
                                        <div class="list-text-dt">
                                            <span>MayBe</span>
                                            <ins>120</ins>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                        <div class="list-text-dt">
                                            <span>Can\'t Go</span>
                                            <ins>70</ins>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="like-comments">
                            <div class="left-comments">
                                <a href="#" class="like-item" title="Like">
                                    <i class="fas fa-heart"></i>
                                    <span><ins>Like</ins> 251</span>
                                </a>
                                <a href="#" class="like-item lc-left" title="Comment">
                                    <i class="fas fa-comment-alt"></i>
                                    <span><ins>Comment</ins> 10</span>
                                </a>
                            </div>
                            <div class="right-comments">
                                <a href="#" class="like-item" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                    <span><ins>Share</ins> 21</span>
                                </a>
                            </div>
                        </div>
                    </div>';
                }
                echo $set_output;
            }
        } else {
            if (!$eventsthisweek->isEmpty()) {
                foreach ($eventsthisweek as $event) {
                    $set_output .= '
                    <div class="event-main-post">
                        <div class="event-top">
                            <div class="event-top-left">
                                <a href="/event">
                                    <h4>Event Title Here</h4>
                                </a>
                            </div>
                            <div class="event-top-right">
                                <div class="ticket-price">Ticket Price : <span>$15</span></div>
                                <div class="post-dt-dropdown dropdown">
                                    <span class="dropdown-toggle-no-caret" role="button"
                                        data-toggle="collapse" data-target="#eventDropdown"><i
                                            class="fas fa-ellipsis-v"></i></span>
                                    <div class="dropdown-menu post-rt-dropdown dropdown-menu-right"
                                        id="eventDropdown">
                                        <a class="post-link-item" href="#">Hide</a>
                                        <a class="post-link-item" href="/event">Details</a>
                                        <a class="post-link-item" href="/user">User Profile</a>
                                        <a class="post-link-item" href="#">Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-main-image">
                            <div class="main-photo">
                                <div class="photo-overlay"></div>
                                <img src="images/homepage/center/post-img-1.jpg" alt="">
                                <div class="post-buttons">
                                    <div class="left-buttons">
                                        <ul class="main-btns">
                                            <li><button class="main-btn-link"
                                                    onclick="window.location.href=\'/buyticket\';">Buy
                                                    Ticket</button></li>
                                            <li><button class="main-btn-link btn-hide"
                                                    onclick="window.location.href=\'#\';">May
                                                    Be</button></li>
                                        </ul>
                                    </div>
                                    <div class="right-buttons">
                                        <ul class="main-btns">
                                            <li><button class="main-btn-link btn-hide"
                                                    onclick="window.location.href = "#";">450
                                                    Seats</button></li>
                                            <li><button class="main-btn-link btn-hide"
                                                    onclick="window.location.href = "#";">Can\'t
                                                    Go</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-city-dt">
                            <ul class="city-dt-list">
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="list-text-dt">
                                            <span>City</span>
                                            <ins>London</ins>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-calendar-alt"></i>
                                        <div class="list-text-dt">
                                            <span>Date</span>
                                            <ins>21 Nov 2019</ins>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-clock"></i>
                                        <div class="list-text-dt">
                                            <span>Time</span>
                                            <ins>6 PM to 9 PM</ins>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-cloud-sun"></i>
                                        <div class="list-text-dt">
                                            <span>Weather</span>
                                            <ins>Clear</ins>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="event-go-dt">
                            <ul class="go-dt-list">
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                        <div class="list-text-dt">
                                            <span>Going</span>
                                            <ins>45</ins>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-question-circle"
                                            style="color:#a7a8aa;"></i>
                                        <div class="list-text-dt">
                                            <span>MayBe</span>
                                            <ins>120</ins>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="it-items">
                                        <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                        <div class="list-text-dt">
                                            <span>Can\'t Go</span>
                                            <ins>70</ins>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="like-comments">
                            <div class="left-comments">
                                <a href="#" class="like-item" title="Like">
                                    <i class="fas fa-heart"></i>
                                    <span><ins>Like</ins> 251</span>
                                </a>
                                <a href="#" class="like-item lc-left" title="Comment">
                                    <i class="fas fa-comment-alt"></i>
                                    <span><ins>Comment</ins> 10</span>
                                </a>
                            </div>
                            <div class="right-comments">
                                <a href="#" class="like-item" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                    <span><ins>Share</ins> 21</span>
                                </a>
                            </div>
                        </div>
                    </div>';
                }
                echo $set_output;
            }
        }

    }
    public function eventfilter(Request $request)
    {
        //
        $category = $request->category;
        $city = $request->city;
        $date = $request->date;
        $events = Event::join('eventstats', 'eventstats.event_id', "events.id")->paginate(5);
        if (!$events->isEmpty()) {
            foreach ($events as $event) {
                $set_output .= '
                <div class="event-main-post">
                    <div class="event-top">
                        <div class="event-top-left">
                            <a href="/event">
                                <h4>Event Title Here</h4>
                            </a>
                        </div>
                        <div class="event-top-right">
                            <div class="ticket-price">Ticket Price : <span>$15</span></div>
                            <div class="post-dt-dropdown dropdown">
                                <span class="dropdown-toggle-no-caret" role="button"
                                    data-toggle="collapse" data-target="#eventDropdown"><i
                                        class="fas fa-ellipsis-v"></i></span>
                                <div class="dropdown-menu post-rt-dropdown dropdown-menu-right"
                                    id="eventDropdown">
                                    <a class="post-link-item" href="#">Hide</a>
                                    <a class="post-link-item" href="/event">Details</a>
                                    <a class="post-link-item" href="/user">User Profile</a>
                                    <a class="post-link-item" href="#">Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-main-image">
                        <div class="main-photo">
                            <div class="photo-overlay"></div>
                            <img src="images/homepage/center/post-img-1.jpg" alt="">
                            <div class="post-buttons">
                                <div class="left-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link"
                                                onclick="window.location.href=\'/buyticket\';">Buy
                                                Ticket</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href=\'#\';">May
                                                Be</button></li>
                                    </ul>
                                </div>
                                <div class="right-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = "#";">450
                                                Seats</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = "#";">Can\'t
                                                Go</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-city-dt">
                        <ul class="city-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="list-text-dt">
                                        <span>City</span>
                                        <ins>London</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-calendar-alt"></i>
                                    <div class="list-text-dt">
                                        <span>Date</span>
                                        <ins>21 Nov 2019</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-clock"></i>
                                    <div class="list-text-dt">
                                        <span>Time</span>
                                        <ins>6 PM to 9 PM</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-cloud-sun"></i>
                                    <div class="list-text-dt">
                                        <span>Weather</span>
                                        <ins>Clear</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="event-go-dt">
                        <ul class="go-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Going</span>
                                        <ins>45</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-question-circle"
                                        style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>MayBe</span>
                                        <ins>120</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Can\'t Go</span>
                                        <ins>70</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="like-comments">
                        <div class="left-comments">
                            <a href="#" class="like-item" title="Like">
                                <i class="fas fa-heart"></i>
                                <span><ins>Like</ins> 251</span>
                            </a>
                            <a href="#" class="like-item lc-left" title="Comment">
                                <i class="fas fa-comment-alt"></i>
                                <span><ins>Comment</ins> 10</span>
                            </a>
                        </div>
                        <div class="right-comments">
                            <a href="#" class="like-item" title="Share">
                                <i class="fas fa-share-alt"></i>
                                <span><ins>Share</ins> 21</span>
                            </a>
                        </div>
                    </div>
                </div>';
            }
            echo $set_output;
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
            'venue' => $request->venue,
            'address' => $request->address,
            'address_latitude' => $request->address_latitude,
            'address_longitude' => $request->address_longitude,
            'image' => $imagelink,
            'organizers' => $request->organizers,
            'organizerlink' => $request->organizerslink,

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