@extends('layouts.app')
@section('title', 'Partyslo / Home')
@section('content')
    <main>
        <div class="main-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        <div class="main-left-sidebar">

                            <div class="user-data full-width">
                                <div class="event-top-center">
                                    <h4>Trending DJ</h4>
                                </div>
                                <div class="user-profile">
                                    <div class="username-dt dpbg-1">
                                        <div class="usr-pic">
                                            <img src="images/homepage/left-side/profile-dp.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="user-main-details">
                                        <h4>John Doe</h4>
                                        <span><i class="fas fa-map-marker-alt"></i>India</span>
                                    </div>
                                    <div class="followers-dt-sm">
                                        <h4>Followers</h4>
                                        <span>155</span>
                                    </div>
                                    <div class="profile-link">
                                        <a href="my_dashboard_activity.html">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="user-data full-width">
                                <div class="categories-left-heading">
                                    <h3>Categories</h3>
                                </div>
                                <div class="categories-items">
                                    <a class="category-item" href="#"><i class="fas fa-music"></i>Music</a>
                                    <a class="category-item" href="#"><i class="fas fa-flag"></i>Festival</a>
                                    <a class="category-item" href="#"><i class="fas fa-pen-nib"></i>Art</a>
                                    <a class="category-item" href="#"><i class="fas fa-microphone-alt"></i>Club</a>
                                    <a class="category-item" href="#"><i class="fas fa-grin-squint-tears"></i>Comedy</a>
                                    <a class="category-item" href="#"><i class="far fa-futbol"></i>Sports</a>
                                    <a class="category-item" href="#"><i class="fas fa-video"></i>Theatre</a>
                                    <a class="category-item" href="#"><i class="fas fa-bullhorn"></i>Promotions</a>
                                    <a class="category-item" href="/category"><i class="fas fa-ellipsis-h"></i>Others</a>
                                </div>
                            </div>
                            {{-- <div class="user-data full-width">
                                <div class="categories-left-heading">
                                    <h3>Featuring DJ</h3>
                                </div>
                                <div class="sugguest-user">
                                    <div class="sugguest-user-dt">
                                        <a href="user_dashboard_activity.html"><img
                                                src="images/homepage/left-side/left-img-1.jpg" alt=""></a>
                                        <a href="user_dashboard_activity.html">
                                            <h4>Johnson</h4>
                                        </a>
                                    </div>
                                    <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                                </div>
                                <div class="sugguest-user">
                                    <div class="sugguest-user-dt">
                                        <a href="user_dashboard_activity.html"><img
                                                src="images/homepage/left-side/left-img-2.jpg" alt=""></a>
                                        <a href="user_dashboard_activity.html">
                                            <h4>Jassica William</h4>
                                        </a>
                                    </div>
                                    <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                                </div>
                                <div class="sugguest-user">
                                    <div class="sugguest-user-dt">
                                        <a href="user_dashboard_activity.html"><img
                                                src="images/homepage/left-side/left-img-3.jpg" alt=""></a>
                                        <a href="user_dashboard_activity.html">
                                            <h4>Rock</h4>
                                        </a>
                                    </div>
                                    <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                                </div>
                                <div class="sugguest-user">
                                    <div class="sugguest-user-dt">
                                        <a href="user_dashboard_activity.html"><img
                                                src="images/homepage/left-side/left-img-4.jpg" alt=""></a>
                                        <a href="user_dashboard_activity.html">
                                            <h4>Davil Smith</h4>
                                        </a>
                                    </div>
                                    <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                                </div>
                                <div class="sugguest-user">
                                    <div class="sugguest-user-dt">
                                        <a href="user_dashboard_activity.html"><img
                                                src="images/homepage/left-side/left-img-5.jpg" alt=""></a>
                                        <a href="user_dashboard_activity.html">
                                            <h4>Ricky Doe</h4>
                                        </a>
                                    </div>
                                    <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="center-section">
                            <div class="main-search-bar">
                                <h2>Events happening in your city</h2>
                                <form>
                                    <div class="main-search-inputs">
                                        <div class="row no-gutters">
                                            <div class="col-lg-5 col-md-12 col-sm-12">
                                                <input class="search-form-input typeahead" type="text" id="category"
                                                    placeholder="Search events by categories" autocomplete="off">
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 border-lr">
                                                <select class="wide" style="display: none;">
                                                    <option>Select City</option>
                                                    <option>Ludhiana</option>
                                                    <option>Patiala</option>
                                                    <option>chandigrah</option>
                                                    <option>Amritsar</option>
                                                    <option>Juhu</option>
                                                    <option>Moga</option>
                                                    <option>Bandra.</option>
                                                    <option>Borivali</option>
                                                    <option>Dahisar</option>
                                                    <option>Goregaon</option>
                                                    <option>Bhalswa Jahangir Pur</option>
                                                    <option>Dallo Pura</option>
                                                    <option>Jamuna Nagar</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12">
                                                <input class="search-form-input datepicker-here" data-language='en'
                                                    type="text" placeholder="Select Date">
                                            </div>
                                            <div class="col-lg-1 col-md-12 col-sm-12">
                                                <button class="search-btn" type="submit" id="search"><i
                                                        class="fas fa-search"></i><span>Search</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="main-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a href="#tab-upcoming" class="nav-link active" id="upcoming"
                                            data-toggle="tab">Upcoming</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-trending" class="nav-link" id="trending"
                                            data-toggle="tab">Trending</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-this-week" class="nav-link" id="thisweek" data-toggle="tab">This
                                            Week</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-upcoming">
                                        <div class="main-posts">
                                            <div id="event_content">
                                                @include('theme.event_upcoming')
                                            </div>
                                            <div class="main-loader">
                                                <div class="spinner">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-trending">
                                        <div class="main-posts">
                                            <div id="event_content">
                                                @include('theme.event_trending')
                                            </div>
                                           

                                            <div class="main-loader">
                                                <div class="spinner">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-this-week">
                                        <div class="main-posts">
                                          
                                            <div id="event_content">
                                                @include('theme.event_thisweek')
                                            </div>
                                            <div class="main-loader">
                                                <div class="spinner">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="right-side-items">
                            <div class="post-event">
                                <h6>Want to Post Your Event</h6>
                                <p>Post your event on Partyslo for free. Just make an account and add it through the simple
                                    form.
                                    As simple as that.</p>
                                <a href="/add_new_event" class="add-nw-event">Post It Now</a>
                            </div>
                            <div class="explore-events">
                                <h4>Explore Events</h4>
                                <ul class="explore-events-dt">
                                    <li>
                                        <a href="#">
                                            <div class="explore-card exp-right light-blue">
                                                <div class="explore-item-1">
                                                    <div class="explore-icon-bg icon-large-1">
                                                        <i class="fas fa-sun"></i>
                                                    </div>
                                                    <div class="explore-content">
                                                        <i class="fas fa-sun"></i>
                                                        <span>Today</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="explore-card exp-left light-yellow">
                                                <div class="explore-item-1">
                                                    <div class="explore-icon-bg icon-large-1">
                                                        <i class="fas fa-cloud-sun"></i>
                                                    </div>
                                                    <div class="explore-content">
                                                        <i class="fas fa-cloud-sun"></i>
                                                        <span>Tomorrow</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="explore-card exp-right dark-blue">
                                                <div class="explore-item-1">
                                                    <div class="explore-icon-bg icon-large-1">
                                                        <i class="fas fa-calendar-alt"></i>
                                                    </div>
                                                    <div class="explore-content">
                                                        <i class="fas fa-calendar-alt"></i>
                                                        <span>This Week</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="explore-card exp-left light-green">
                                                <div class="explore-item-1">
                                                    <div class="explore-icon-bg icon-large-1">
                                                        <i class="fas fa-calendar-check"></i>
                                                    </div>
                                                    <div class="explore-content">
                                                        <i class="fas fa-calendar-check"></i>
                                                        <span>Choose Date</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-weather">
                                <div class="weather-left">
                                    <div class="weather-city">Ludhiana</div>
                                    <div class="week-text">Monday</div>
                                    <div class="week-text">14 Oct 2019</div>
                                    <div class="week-text" style="font-size: 18px;"><i class="fas fa-tint"></i> 30%</div>
                                    <ul>
                                        <li>
                                            <div class="up-down"><i class="fas fa-long-arrow-alt-up"></i> 18°</div>
                                        </li>
                                        <li>
                                            <div class="up-down"><i class="fas fa-long-arrow-alt-down"></i> 25°</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="weather-right">
                                    <i class="fas fa-cloud-sun"></i>
                                    <span>22°</span>
                                </div>
                                <ul class="weekly-weather">
                                    <li>
                                        <div class="degree-text">32°</div>
                                        <div class="weather-icon"><i class="fas fa-sun"></i></div>
                                        <div class="day-text">Tue</div>
                                    </li>
                                    <li>
                                        <div class="degree-text">19°</div>
                                        <div class="weather-icon"><i class="fas fa-cloud-sun-rain"></i></div>
                                        <div class="day-text">Wed</div>
                                    </li>
                                    <li>
                                        <div class="degree-text">32°</div>
                                        <div class="weather-icon"><i class="fas fa-cloud-sun"></i></div>
                                        <div class="day-text">Thu</div>
                                    </li>
                                    <li>
                                        <div class="degree-text">27°</div>
                                        <div class="weather-icon"><i class="fas fa-wind"></i></div>
                                        <div class="day-text">Fri</div>
                                    </li>
                                    <li>
                                        <div class="degree-text">22°</div>
                                        <div class="weather-icon"><i class="fas fa-cloud-showers-heavy"></i></div>
                                        <div class="day-text">Sat</div>
                                    </li>
                                    <li>
                                        <div class="degree-text">12°</div>
                                        <div class="weather-icon"><i class="fas fa-snowflake"></i></div>
                                        <div class="day-text">Sun</div>
                                    </li>
                                </ul>
                            </div>
                            {{-- <div class="news-data full-width">
                                <div class="categories-left-heading">
                                    <h3>News</h3>
                                </div>
                                <div class="categories-items">
                                    <div class="news-item">
                                        <div class="news-item-heading">
                                            <i class="fas fa-music"></i>
                                            <h6>Music</h6>
                                        </div>
                                        <div class="news-description">
                                            Suspendisse cursus egestas luctus. <a href="#">Http://website.com/news</a>
                                        </div>
                                    </div>
                                    <div class="news-item">
                                        <div class="news-item-heading">
                                            <i class="fas fa-pen-nib"></i>
                                            <h6>Art</h6>
                                        </div>
                                        <div class="news-description">
                                            Suspendisse cursus egestas luctus. <a href="#">Http://website.com/news</a>
                                        </div>
                                    </div>
                                    <div class="news-item">
                                        <div class="news-item-heading">
                                            <i class="far fa-futbol"></i>
                                            <h6>Sports</h6>
                                        </div>
                                        <div class="news-description">
                                            Suspendisse cursus egestas luctus. <a href="#">Http://website.com/news</a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@section('scripts')
    @parent
    <script type='text/javascript' src="{{ asset('js/jquery.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/bootstrap3-typeahead.min.js') }}"></script>
    <script type="text/javascript">
        $("input.typeahead").typeahead({
            source: function(query, process) {
                return $.get(
                    "/categorysearch", {
                        query: query
                    },
                    function(data) {
                        return process(data);
                    }
                );
            },
            updater: function(item) {
                return item;
            }
        });

    </script>
    <script>
        var event_type="upcoming";
        var event_cat,event_city, event_date;
        $("#upcoming").click(function() {
           console.log('upcoming');
           event_type="upcoming";
        });
        $("#trending").click(function() {
           console.log('trending');
           event_type="trending";
        });
        $("#thisweek").click(function() {
            event_type="thisweek";
           console.log('this week');
        });
        var SITEURL = "{{ url('/') }}";
        var path ="events";
        var page = 1; //track user scroll as page number, right now page number is 1
      //  load_more(page); //initial content load
        $(window).scroll(function() { //detect page scroll
            if ($(window).scrollTop() + $(window).height() >= $(document)
                .height()) { //if user scrolled from top to bottom of the page
                page++; //page number increment
                load_more(page,path); //load content   
            }
        });

        $("#search").click(function() {
            page=1;
            path="filterevents";
            $("#event_content").empty();
            load_more(page,path);
        });
        function load_more(page,path) {
            $.ajax({
                    url: SITEURL + "/"+path+"?page=" + page,
                    type: "get",
                    data: { type: event_type,category: event_cat, city:event_city, date:event_date },
                    datatype: "json",
                    beforeSend: function() {
                        $('.main-loader').show();
                    }
                })
                .done(function(data) {
                    console.log(data);
                    if (data.length == 0) {
                        console.log(data.length);
                        //notify user if nothing to load
                        $('.main-loader').html("No more records!");
                        return;
                    }
                    $('.main-loader').hide(); //hide loading animation once data is received
                    $("#event_content").append(data); //append data into #results element          
                    //console.log(data.length);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    alert('No response from server');
                })

        }

    </script>
@stop
@endsection
