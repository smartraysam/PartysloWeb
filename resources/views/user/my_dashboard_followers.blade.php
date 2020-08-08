@extends('layouts.app')
@section('title', 'Partyslo / Dashboard')
@section('content')
    <main class="dashboard-mp">
        <div class="dash-todo-thumbnail-area1">
            <div class="todo-thumb1 dash-bg-image1 dash-bg-overlay"
                style="background-image:url(images/event-view/my-bg.jpg);"></div>
            <div class="dash-todo-header1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="my-profile-dash">
                                <div class="my-dp-dash">
                                    <img src="images/my-dashboard/my-dp.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dash-dts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="event-title">
                            <div class="my-dash-dt">
                                <h3>John Doe</h3>
                                <span>Member since August 2017</span>
                                <span><i class="fas fa-map-marker-alt"></i>India</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <ul class="right-details">
                            <li>
                                <div class="my-all-evnts">
                                    <a href="my_dashboard_events.html">View Events</a>
                                </div>
                            </li>
                            <li>
                                <div class="all-dis-evnt">
                                    <div class="dscun-txt">Events</div>
                                    <div class="dscun-numbr">22</div>
                                </div>
                            </li>
                            <li>
                                <div class="all-dis-evnt">
                                    <div class="dscun-txt">Discussions</div>
                                    <div class="dscun-numbr">40</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="dash-tab-links">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" href="my_dashboard_activity.html">Activity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="my_dashboard_about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="my_dashboard_discussions.html">Discussions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="my_dashboard_events.html">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="my_dashboard_followers.html">Followers <span
                                        class="badge badge-alrts">20</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="my_dashboard_following.html">Following <span
                                        class="badge badge-alrts">20</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="my_dashboard_messages.html">Messages <span
                                        class="badge badge-alrts">2</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="my_dashboard_credits.html">Credits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="my_dashboard_booked_events.html">Booked Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="my_dashboard_history.html">History</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="my_dashboard_setting_info.html">Setting</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dash-discussions mb20">
                    <div class="main-section">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-lg-4 col-md-12">
                                    <div class="search-bar-main">
                                        <input type="text" class="search-1" placeholder="Search peoples...">
                                        <i class="fas fa-search srch-ic"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="all-search-events">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="userbg-dt dpbg-1">
                                                <div class="usr-pic">
                                                    <img src="images/find-peoples/user-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="user-main-details">
                                                <h4>John Doe</h4>
                                                <span><i class="fas fa-map-marker-alt"></i>India</span>
                                            </div>
                                            <ul class="follow-msg-dt">
                                                <li>
                                                    <div class="msg-dt-sm">
                                                        <button class="msg-btn1">Message</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="follow-dt-sm">
                                                        <button class="follow-btn1">Follow Back</button>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="profile-link">
                                                <a href="user_dashboard_activity.html">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="userbg-dt dpbg-2">
                                                <div class="usr-pic">
                                                    <img src="images/find-peoples/user-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="user-main-details">
                                                <h4>Rock Smith</h4>
                                                <span><i class="fas fa-map-marker-alt"></i>Canada</span>
                                            </div>
                                            <ul class="follow-msg-dt">
                                                <li>
                                                    <div class="msg-dt-sm">
                                                        <button class="msg-btn1">Message</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="follow-dt-sm">
                                                        <button class="follow-btn1">Following</button>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="profile-link">
                                                <a href="user_dashboard_activity.html">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="userbg-dt dpbg-3">
                                                <div class="usr-pic">
                                                    <img src="images/find-peoples/user-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="user-main-details">
                                                <h4>Joy William</h4>
                                                <span><i class="fas fa-map-marker-alt"></i>Australia</span>
                                            </div>
                                            <ul class="follow-msg-dt">
                                                <li>
                                                    <div class="msg-dt-sm">
                                                        <button class="msg-btn1">Message</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="follow-dt-sm">
                                                        <button class="follow-btn1">Follow Back</button>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="profile-link">
                                                <a href="user_dashboard_activity.html">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="userbg-dt dpbg-4">
                                                <div class="usr-pic">
                                                    <img src="images/find-peoples/user-4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="user-main-details">
                                                <h4>Johnson Smith</h4>
                                                <span><i class="fas fa-map-marker-alt"></i>Newyork</span>
                                            </div>
                                            <ul class="follow-msg-dt">
                                                <li>
                                                    <div class="msg-dt-sm">
                                                        <button class="msg-btn1">Message</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="follow-dt-sm">
                                                        <button class="follow-btn1">Follow Back</button>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="profile-link">
                                                <a href="user_dashboard_activity.html">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="userbg-dt dpbg-5">
                                                <div class="usr-pic">
                                                    <img src="images/find-peoples/user-5.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="user-main-details">
                                                <h4>Joginder Singh</h4>
                                                <span><i class="fas fa-map-marker-alt"></i>India</span>
                                            </div>
                                            <ul class="follow-msg-dt">
                                                <li>
                                                    <div class="msg-dt-sm">
                                                        <button class="msg-btn1">Message</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="follow-dt-sm">
                                                        <button class="follow-btn1">Follow Back</button>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="profile-link">
                                                <a href="user_dashboard_activity.html">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="userbg-dt dpbg-6">
                                                <div class="usr-pic">
                                                    <img src="images/find-peoples/user-6.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="user-main-details">
                                                <h4>Davinder Singh</h4>
                                                <span><i class="fas fa-map-marker-alt"></i>Los Angels</span>
                                            </div>
                                            <ul class="follow-msg-dt">
                                                <li>
                                                    <div class="msg-dt-sm">
                                                        <button class="msg-btn1">Message</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="follow-dt-sm">
                                                        <button class="follow-btn1">Following</button>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="profile-link">
                                                <a href="user_dashboard_activity.html">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="userbg-dt dpbg-7">
                                                <div class="usr-pic">
                                                    <img src="images/find-peoples/user-7.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="user-main-details">
                                                <h4>Amritpal</h4>
                                                <span><i class="fas fa-map-marker-alt"></i>Australia</span>
                                            </div>
                                            <ul class="follow-msg-dt">
                                                <li>
                                                    <div class="msg-dt-sm">
                                                        <button class="msg-btn1">Message</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="follow-dt-sm">
                                                        <button class="follow-btn1">Follow Back</button>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="profile-link">
                                                <a href="user_dashboard_activity.html">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="userbg-dt dpbg-8">
                                                <div class="usr-pic">
                                                    <img src="images/find-peoples/user-8.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="user-main-details">
                                                <h4>Zoena Singh</h4>
                                                <span><i class="fas fa-map-marker-alt"></i>Nepal</span>
                                            </div>
                                            <ul class="follow-msg-dt">
                                                <li>
                                                    <div class="msg-dt-sm">
                                                        <button class="msg-btn1">Message</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="follow-dt-sm">
                                                        <button class="follow-btn1">Following</button>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="profile-link">
                                                <a href="user_dashboard_activity.html">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="userbg-dt dpbg-9">
                                                <div class="usr-pic">
                                                    <img src="images/find-peoples/user-9.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="user-main-details">
                                                <h4>Simon Doe</h4>
                                                <span><i class="fas fa-map-marker-alt"></i>India</span>
                                            </div>
                                            <ul class="follow-msg-dt">
                                                <li>
                                                    <div class="msg-dt-sm">
                                                        <button class="msg-btn1">Message</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="follow-dt-sm">
                                                        <button class="follow-btn1">Follow Back</button>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="profile-link">
                                                <a href="user_dashboard_activity.html">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="userbg-dt dpbg-10">
                                                <div class="usr-pic">
                                                    <img src="images/find-peoples/user-10.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="user-main-details">
                                                <h4>Gaggu Smith</h4>
                                                <span><i class="fas fa-map-marker-alt"></i>Turky</span>
                                            </div>
                                            <ul class="follow-msg-dt">
                                                <li>
                                                    <div class="msg-dt-sm">
                                                        <button class="msg-btn1">Message</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="follow-dt-sm">
                                                        <button class="follow-btn1">Follow Back</button>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="profile-link">
                                                <a href="user_dashboard_activity.html">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="userbg-dt dpbg-11">
                                                <div class="usr-pic">
                                                    <img src="images/find-peoples/user-11.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="user-main-details">
                                                <h4>Varun William</h4>
                                                <span><i class="fas fa-map-marker-alt"></i>Bangladesh</span>
                                            </div>
                                            <ul class="follow-msg-dt">
                                                <li>
                                                    <div class="msg-dt-sm">
                                                        <button class="msg-btn1">Message</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="follow-dt-sm">
                                                        <button class="follow-btn1">Follow Back</button>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="profile-link">
                                                <a href="user_dashboard_activity.html">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="userbg-dt dpbg-12">
                                                <div class="usr-pic">
                                                    <img src="images/find-peoples/user-12.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="user-main-details">
                                                <h4>Johnson William</h4>
                                                <span><i class="fas fa-map-marker-alt"></i>New Zealand</span>
                                            </div>
                                            <ul class="follow-msg-dt">
                                                <li>
                                                    <div class="msg-dt-sm">
                                                        <button class="msg-btn1">Message</button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="follow-dt-sm">
                                                        <button class="follow-btn1">Follow Back</button>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="profile-link">
                                                <a href="user_dashboard_activity.html">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="main-loader search-loader">
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
        </div>
    </main>

@endsection
