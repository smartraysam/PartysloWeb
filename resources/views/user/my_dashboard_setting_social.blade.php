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
                                    <a class="tab-item-1" href="my_dashboard_all_notifications.html">All Notifications</a>
                                    <a class="tab-item-1 active" href="my_dashboard_setting_social.html">Social Networks</a>
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
                                <div class="user-data full-width">
                                    <div class="about-left-heading">
                                        <h3>Social Networks</h3>
                                    </div>
                                    <div class="prsnl-info">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group scl-icn">
                                                    <input class="social-input" type="text"
                                                        placeholder="http://facebook.com/johndoe">
                                                    <div class="scl-icn1 scl-bg-1"><i class="fab fa-facebook-f"></i></div>
                                                </div>
                                                <div class="form-group scl-icn">
                                                    <input class="social-input" type="text"
                                                        placeholder="http://twitter.com/johndoe">
                                                    <div class="scl-icn1 scl-bg-2"><i class="fab fa-twitter"></i></div>
                                                </div>
                                                <div class="form-group scl-icn">
                                                    <input class="social-input" type="text"
                                                        placeholder="http://googleplus.com/johndoe">
                                                    <div class="scl-icn1 scl-bg-3"><i class="fab fa-google-plus-g"></i>
                                                    </div>
                                                </div>
                                                <div class="form-group scl-icn">
                                                    <input class="social-input" type="text"
                                                        placeholder="http://instagram.com/johndoe">
                                                    <div class="scl-icn1 scl-bg-4"><i class="fab fa-instagram"></i></div>
                                                </div>
                                                <div class="form-group scl-icn">
                                                    <input class="social-input" type="text"
                                                        placeholder="http://pinterest.com/johndoe">
                                                    <div class="scl-icn1 scl-bg-5"><i class="fab fa-pinterest-p"></i></div>
                                                </div>
                                                <div class="form-group scl-icn">
                                                    <input class="social-input" type="text"
                                                        placeholder="http://linkedin.com/johndoe">
                                                    <div class="scl-icn1 scl-bg-6"><i class="fab fa-linkedin-in"></i></div>
                                                </div>
                                                <div class="form-group scl-icn">
                                                    <input class="social-input" type="text"
                                                        placeholder="http://youtube.com/johndoe">
                                                    <div class="scl-icn1 scl-bg-7"><i class="fab fa-youtube"></i></div>
                                                </div>

                                                <div class="add-profile-btn">
                                                    <button class="setting-save-btn" type="submit">Save Changes</button>
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
