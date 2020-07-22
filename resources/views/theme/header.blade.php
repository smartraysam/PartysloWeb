<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-dark1 justify-content-sm-start">
                    <a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto" href="/"><img src="images/logo.svg" alt=""></a>
                    <button class="navbar-toggler align-self-start" type="button">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav align-self-stretch">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/discussions">Discussion</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/category">Category</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/blog">Blog</a>
                            </li>
                        </ul>
                        <a href="/add_new_event" class="add-event">Add New Event</a>
                    </div>
                    <ul class="group-icons">
                        <li><a href="/search_result" class="icon-set"><i class="fas fa-search"></i></a></li>
                        @guest
                        @else
                        <li class="dropdown">
                            <a href="#" class="icon-set dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                <i class="fas fa-user-plus"></i>
                            </a>
                            <div class="dropdown-menu user-request-dropdown dropdown-menu-right">
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#"><img src="images/user-dp-1.jpg" alt=""></a>
                                            <a href="#" class="user-title">Jassica William</a>
                                        </div>
                                        <button class="accept-btn">Accept</button>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#"><img src="images/user-dp-1.jpg" alt=""></a>
                                            <a href="#" class="user-title">Rock Smith</a>
                                        </div>
                                        <button class="accept-btn">Accept</button>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#"><img src="images/user-dp-1.jpg" alt=""></a>
                                            <a href="#" class="user-title">Joy Doe</a>
                                        </div>
                                        <button class="accept-btn">Accept</button>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <a href="my_dashboard_all_requests.html" class="view-all">View All Friend
                                        Requests</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="icon-set dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <div class="dropdown-menu message-dropdown dropdown-menu-right">
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                <div class="user-title1">Jassica William </div>
                                                <span>Hey How are you John Doe...</span>
                                            </a>
                                        </div>
                                        <div class="time5">2 min ago</div>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                <div class="user-title1">Rock Smith </div>
                                                <span>Interesting Event! I will join this...</span>
                                            </a>
                                        </div>
                                        <div class="time5">5 min ago</div>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                <div class="user-title1">Joy Doe </div>
                                                <span>Hey Sir! What about you...</span>
                                            </a>
                                        </div>
                                        <div class="time5">10 min ago</div>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <a href="my_dashboard_messages.html" class="view-all">View All Messages</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="icon-set dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                <i class="fas fa-bell"></i>
                            </a>
                            <div class="dropdown-menu notification-dropdown dropdown-menu-right">
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                <div class="user-title1">Jassica William </div>
                                                <span>comment on your video.</span>
                                            </a>
                                        </div>
                                        <div class="time5">2 min ago</div>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                <div class="user-title1">Rock Smith</div>
                                                <span>your order is accepted.</span>
                                            </a>
                                        </div>
                                        <div class="time5">5 min ago</div>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                <div class="user-title1">Joy Doe </div>
                                                <span>your bill slip sent on your email.</span>
                                            </a>
                                        </div>
                                        <div class="time5">10 min ago</div>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <a href="my_dashboard_all_notifications.html" class="view-all">View All
                                        Notifications</a>
                                </div>
                            </div>
                        </li>
                        @endguest
                    </ul>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item account order-1 dropdown">

                                <a href="#" class="account-link dropdown-toggle-no-caret" role="button"
                                    data-toggle="dropdown">
                                    <div class="user-dp"><img src="images/dp.jpg" alt=""></div>
                                    <span>Hi! {{ Auth::user()->name }} </span>
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu account-dropdown dropdown-menu-right">
                                    <a class="link-item" href="/dashboard">Dashboard</a>
                                    <a class="link-item" href="my_dashboard_activity.html">Profile</a>
                                    <a class="link-item" href="my_dashboard_messages.html">Messages</a>
                                    <a class="link-item" href="my_dashboard_booked_events.html">Booked Events</a>
                                    <a class="link-item" href="my_dashboard_credits.html">Credit <span
                                            class="right-cm">$100</span></a>
                                    <a class="link-item" href="invite.html">Invite</a>
                                    <a class="link-item" href="my_dashboard_setting_info.html">Setting</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                            </li>
                            @endguest
                        </ul>
                    </div>

                </nav>
                <div class="overlay"></div>
            </div>
        </div>
    </div>
</header>