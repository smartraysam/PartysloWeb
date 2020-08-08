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
                                <a class="nav-link active" href="my_dashboard_booked_events.html">Booked Events</a>
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
                <div class="booked-events mb-20">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="checkout-heading">
                                <h2>Booked Events</h2>
                            </div>
                            <div class="table-responsive table-brder">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="font-size:16px; font-weight:500;">Event</th>
                                            <th scope="col" style="font-size:16px; font-weight:500;">Tickets Qty</th>
                                            <th scope="col" style="font-size:16px; font-weight:500;">Category</th>
                                            <th scope="col" style="font-size:16px; font-weight:500;">Bill Slip</th>
                                            <th scope="col" style="font-size:16px; font-weight:500;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="checkout-dt">
                                                    <div class="check-img">
                                                        <img src="images/event-view/checkout-img.jpg" alt="">
                                                    </div>
                                                    <div class="evnt-dt-ckot">
                                                        <div class="chk-heading">Event Title Goes Here</div>
                                                        <div class="ctgory">Club</div>
                                                        <div class="date-tme">Friday, 23 Dec 2019 | 2.00 PM to 9.00 PM</div>
                                                        <div class="lctn-dt"><i class="fas fa-map-marker-alt"></i> India
                                                        </div>
                                                    </div>
                                                </div>
                                            </th>
                                            <td>1</td>
                                            <td>VIP</td>
                                            <td><a href="#" style="color:#313131;">Download</a></td>
                                            <td><a href="#" style="color:#313131;">Cancel</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="checkout-dt">
                                                    <div class="check-img">
                                                        <img src="images/event-view/checkout-img2.jpg" alt="">
                                                    </div>
                                                    <div class="evnt-dt-ckot">
                                                        <div class="chk-heading">Event Title Goes Here</div>
                                                        <div class="ctgory">Club</div>
                                                        <div class="date-tme">Sunday, 10 Dec 2019 | 2.00 PM to 9.00 PM</div>
                                                        <div class="lctn-dt"><i class="fas fa-map-marker-alt"></i> India
                                                        </div>
                                                    </div>
                                                </div>
                                            </th>
                                            <td>1</td>
                                            <td>VIP</td>
                                            <td><a href="#" style="color:#313131;">Download</a></td>
                                            <td><a href="#" style="color:#313131;">Cancel</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
