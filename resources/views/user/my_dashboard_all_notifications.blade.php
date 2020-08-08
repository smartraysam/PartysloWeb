@extends('layouts.app')
@section('title', 'Partyslo / Dashboard / Notification')
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
                                <a class="nav-link" href="my_dashboard_followers.html">Followers <span
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
                                <a class="nav-link active" href="my_dashboard_setting_info.html">Setting</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="setting-page mb-20">
                    <div class="row">
                        <div class="col-lg-3 col-md-5">
                            <div class="user-data full-width">
                                <div class="categories-left-heading">
                                    <h3>Your Details</h3>
                                </div>
                                <div class="categories-items">
                                    <a class="tab-item-1" href="my_dashboard_setting_info.html">Personal Info</a>
                                    <a class="tab-item-1" href="my_dashboard_setting_profile.html">Profile</a>
                                    <a class="tab-item-1" href="my_dashboard_all_requests.html">All Friend Requests</a>
                                    <a class="tab-item-1 active" href="my_dashboard_all_notifications.html">All
                                        Notifications</a>
                                    <a class="tab-item-1" href="my_dashboard_setting_social.html">Social Networks</a>
                                    <a class="tab-item-1" href="my_dashboard_setting_email.html">Email Setting</a>
                                    <a class="tab-item-1" href="my_dashboard_setting_notification.html">Notification
                                        Setting</a>
                                    <a class="tab-item-1" href="my_dashboard_setting_change_pass.html">Change Password</a>
                                    <a class="tab-item-1" href="my_dashboard_setting_delete_account.html">Deactivate
                                        Account</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-7">
                            <div class="setting-form">
                                <div class="user-data full-width mb-0">
                                    <div class="about-left-heading">
                                        <h3>All Notifications</h3>
                                    </div>
                                    <div class="all-rqusts1">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="user-request-list">
                                                    <div class="request-users">
                                                        <div class="user-request-dt">
                                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                                <div class="user-noti-txt">
                                                                    <div class="user-title1">Jassica William </div>
                                                                    <span>comment on your event.</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="time5 timelt5">2 min ago</div>
                                                    </div>
                                                </div>
                                                <div class="user-request-list">
                                                    <div class="request-users">
                                                        <div class="user-request-dt">
                                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                                <div class="user-noti-txt">
                                                                    <div class="user-title1">Jassica William </div>
                                                                    <span>like your event.</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="time5 timelt5">3 min ago</div>
                                                    </div>
                                                </div>
                                                <div class="user-request-list">
                                                    <div class="request-users">
                                                        <div class="user-request-dt">
                                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                                <div class="user-noti-txt">
                                                                    <div class="user-title1">Rock Smith</div>
                                                                    <span>Booked your event.</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="time5 timelt5">5 min ago</div>
                                                    </div>
                                                </div>
                                                <div class="user-request-list">
                                                    <div class="request-users">
                                                        <div class="user-request-dt">
                                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                                <div class="user-noti-txt">
                                                                    <div class="user-title1">Congratulations! </div>
                                                                    <span>your booked event name.</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="time5 timelt5">10 min ago</div>
                                                    </div>
                                                </div>
                                                <div class="user-request-list">
                                                    <div class="request-users">
                                                        <div class="user-request-dt">
                                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                                <div class="user-noti-txt">
                                                                    <div class="user-title1">Jassica William </div>
                                                                    <span>can't go reacts on your event.</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="time5 timelt5">15 min ago</div>
                                                    </div>
                                                </div>
                                                <div class="user-request-list">
                                                    <div class="request-users">
                                                        <div class="user-request-dt">
                                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                                <div class="user-noti-txt">
                                                                    <div class="user-title1">Jassica William </div>
                                                                    <span>25 people joined on your event.</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="time5 timelt5">2 min ago</div>
                                                    </div>
                                                </div>
                                                <div class="user-request-list">
                                                    <div class="request-users">
                                                        <div class="user-request-dt">
                                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                                <div class="user-noti-txt">
                                                                    <div class="user-title1">Jassica William </div>
                                                                    <span>comment on your event name.</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="time5 timelt5">2 min ago</div>
                                                    </div>
                                                </div>

                                            </div>
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
