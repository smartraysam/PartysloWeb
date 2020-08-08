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
                                <a class="nav-link active" href="my_dashboard_credits.html">Credits</a>
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
                    <div class="col-lg-3 col-md-5">
                        <div class="user-data full-width">
                            <div class="about-left-heading">
                                <h3>Credits Details</h3>
                            </div>
                            <ul class="credit-dt-items">
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Credit Balance
                                        </div>
                                        <div class="about-2">
                                            $100
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Currency
                                        </div>
                                        <div class="about-2">
                                            USD
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Credit Card
                                        </div>
                                        <div class="about-2">
                                            Visa
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <div class="user-data full-width">
                            <div class="about-left-heading">
                                <h3>Add New Credit Card or Debit Card</h3>
                            </div>
                            <div class="Credit-dt-inputs">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <form>
                                            <div class="credit-form">
                                                <div class="form-group">
                                                    <label>Card Number*</label>
                                                    <input class="payment-input" type="text" placeholder="Card number">
                                                </div>
                                                <div class="form-group">
                                                    <label>Holder Name*</label>
                                                    <input class="payment-input" type="text" placeholder="Holder name">
                                                </div>
                                                <div class="exp-cvv">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Expiry Date*</label>
                                                                <input class="payment-input datepicker-here" type="text"
                                                                    data-language="en" data-min-view="months"
                                                                    data-view="months" data-date-format="MM yyyy"
                                                                    placeholder="Expiry Date">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Cvv / Cvc*</label>
                                                                <input class="payment-input" type="text" placeholder="Ccv">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Add Amount*</label>
                                                    <input class="payment-input" type="text"
                                                        placeholder="Enter Amount ($0)">
                                                </div>
                                                <div class="add-crdt-amnt">
                                                    <button class="add-credit-btn" type="submit">Add card</button>
                                                </div>
                                            </div>
                                        </form>
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
