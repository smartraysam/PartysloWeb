<?php

namespace App\Http\Controllers;

use App\Category;
use App\Djlist;
use App\Event;
use App\Eventimg;
use App\Eventstat;
use App\GooglePlace;
use App\Traits\UploadTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;



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
                    <div class="like-comments">9999999999999
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
        $category = Category::select("name")->get();
        return view('add_new_event', compact('category'));
    }
    public function autocomplete(Request $request)
    {
        $str = $request->get('query');
        $data = Djlist::select(["id", "name", "genre"])
            ->where('name', 'LIKE', '%' . $str . '%')
            ->orwhere('genre', 'LIKE', '%' . $str . '%')
            ->get();
        return response()->json($data);
    }

    public function uploadImage($request, $eventid)
    {
        if ($request->hasfile('event_image')) {
            // Get image file
            $feature_image = "";
            $imgname = str_replace(' ', '', $request->title);
            $folder = 'images/events/';
            foreach ($request->file('event_image') as $image) {
                $name = $image->getClientOriginalName();
                $feature_image = 'images/events/' . $imgname . '_' . $name . '.' . $image->getClientOriginalExtension();
                $this->uploadOne($image, $folder, 'public', $imgname);
                \Log::info($feature_image);
                $eventimg = Eventimg::create([
                    'event_id' => $eventid,
                    'image' => URL::to('/') . "/" . $feature_image,
                ]);
                $eventimg->save();
            }
            $event = Event::where("id", $eventid)->first();
            $event->image = URL::to('/') . "/" . $feature_image;
            $event->organizerlink = URL::to('/') . "/" . $event->id . "/" . Str::slug($event->title);
            $event->save();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $address = $request->address;
        $placeid = $request->address_placeid;
        $start_date = Carbon::createFromFormat('m/d/Y', $request->startdate)->format('Y-m-d');
        $end_date = Carbon::createFromFormat('m/d/Y', $request->enddate)->format('Y-m-d');
        $djlist_id = array();
        $category_list = array();
        $start_time = date("H:i", strtotime($request->starttime));
        $end_time = date("H:i", strtotime($request->endtime));
        $djs = $request->dj;

        $arrayDj = explode(",", $djs);
        foreach ($arrayDj as $key => $value) {
            array_push($djlist_id, $value);
            if (is_numeric($value)) {
                $category = Djlist::where("id", $value)->first();
                $genre = json_decode($category->genre);
                $category_list = array_unique(array_merge($category_list, $genre), SORT_REGULAR);
            }
        }

        $venue = $request->venue;
        if (count($djlist_id) == 0) {
            array_push($djlist_id, 0);
        }
        $event = Event::create([
            'title' => $request->title,
            'owner' => Auth::user()->id,
            'djlist_id' => json_encode($djlist_id),
            'description' => $request->description,
            'ticketfee' => $request->ticket,
            'category' => json_encode($category_list),
            'start_date' => $start_date,
            'end_date' => $end_date,
            'start_time' => $start_time,
            'end_time' => $end_time,
            'venue' => $venue,
            'address' => $address,
            'address_latitude' => $request->address_latitude,
            'address_longitude' => $request->address_longitude,
            'image' => "https://images.pexels.com/photos/929778/pexels-photo-929778.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
            'organizers' => $request->organizers,
            'organizerlink' => URL::to('/'),
        ]);

        $event->save();
        $address = $request->address;
        $event_id = $event->id;
        $eventstat = Eventstat::create([
            'event_id' => $event_id,
        ]);
        $eventstat->save();
        $imagelink = $this->uploadImage($request, $event_id);
        $this->getPlaceDetails($placeid, $event_id, $venue, $address);
        return redirect()->back()->with('status', 'Event posted successfully!');
    }

    public function getPlaceDetails($placeid, $eventid, $venue, $address)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('https://maps.googleapis.com/maps/api/place/details/json?placeid=' . $placeid . '&fields=name,rating,formatted_phone_number,icon,types,url,website,opening_hours,price_level,business_status,formatted_address&key=AIzaSyBeuR3UL5jXHRmwVFO4R9NyR6A0pjOvzt0');
        $response = $request->getBody();
        $place = GooglePlace::create([
            'event_id' => $eventid,
            'name' => $venue,
            'address' => $address,
            'data' => $response,
        ]);
        $place->save();
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