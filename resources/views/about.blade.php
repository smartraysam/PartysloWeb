@extends('layouts.app')
@section('title', 'Partyslo / About Us')
@section('content')
    <div class="title-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ol class="title-bar-text">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End -->
    <!-- Body Start -->
    <main class="discussion-mp">
        <div class="main-section">
            <div class="about-us">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="checkout-heading text-center">
                                <h2>About Us</h2>
                            </div>
                            <div class="about-text">
                                <p>Vivamus tortor nisl, lobortis in, faucibus et, tempus at, dui. Nunc risus. Proin
                                    scelerisque augue. Nam ullamcorper. Phasellus id massa. Pellentesque nisl. Pellentesque
                                    habitant tuni morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                    Nunc augue. Aenean sed justo non leo vehicula laoreet. Praesent ipsum libero, auctor ac,
                                    tempus nec, casion tempor nec, justo cretusi sino zumbua iloseum musumfu lilokuta nabase
                                    uchiha itachi suctung from munual pracetamol testio soel curom ose testio soel lorem
                                    isutm pausm mintest osrit ucii</p>
                                <p>Maecenas ullamcorper, odio vel tempus egestas, dui orci faucibus orci, sit amet aliquet
                                    lectus dolor et quam. Pellentesque consequat luctus purus. Nunc et risus. Etiam a nibh
                                    tunil Phasellus dignissim metus eget nisi. Vestibulum sapien dolor, aliquet nec, porta
                                    ac, malesuada a, libero. Praesent feugiat purus eget est. Nulla facilisi. Vestibulum
                                    tincidunt sapiens eu velit. Mauris purus. Maecenas eget mauris eu orci accumsan feugiat.
                                    Pellentesque eget velit. Nunc tincidunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="about-steps">
                                <div class="about-item1">
                                    <div class="about-icon">
                                        <i class="fas fa-calendar-plus"></i>
                                    </div>
                                    <h4>Create Event</h4>
                                    <p>Praesent rhoncus urna nec justo suscipit, id congue justo dictum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="about-steps">
                                <div class="about-item1">
                                    <div class="about-icon">
                                        <i class="fas fa-check-square"></i>
                                    </div>
                                    <h4>Book Event</h4>
                                    <p>Praesent rhoncus urna nec justo suscipit, id congue justo dictum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="about-steps">
                                <div class="about-item1">
                                    <div class="about-icon">
                                        <i class="fas fa-ticket-alt"></i>
                                    </div>
                                    <h4>Buy Tickets</h4>
                                    <p>Praesent rhoncus urna nec justo suscipit, id congue justo dictum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="about-steps">
                                <div class="about-item1">
                                    <div class="about-icon">
                                        <i class="fas fa-smile"></i>
                                    </div>
                                    <h4>Enjoy</h4>
                                    <p>Praesent rhoncus urna nec justo suscipit, id congue justo dictum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="about-btn-center">
                                <button class="post-evnt-btn" onclick="window.location.href = '/add_new_event';">Post a
                                    Event</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="expert-team">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="team-heading text-center">
                                <h2>Expert Team</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="team-bg">
                                <div class="team-img">
                                    <img src="images/about/img-1.jpg" alt="">
                                    <div class="team-overlay">
                                        <div class="team-overlay-text">
                                            <h4>John Doe</h4>
                                            <span>CEO & Founder</span>
                                            <ul class="experts-social-links">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="team-bg">
                                <div class="team-img">
                                    <img src="images/about/img-2.jpg" alt="">
                                    <div class="team-overlay">
                                        <div class="team-overlay-text">
                                            <h4>Rock Smith</h4>
                                            <span>CEO & Founder</span>
                                            <ul class="experts-social-links">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="team-bg">
                                <div class="team-img">
                                    <img src="images/about/img-3.jpg" alt="">
                                    <div class="team-overlay">
                                        <div class="team-overlay-text">
                                            <h4>Albert William</h4>
                                            <span>CTO Manager</span>
                                            <ul class="experts-social-links">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="testi-heading text-center">
                                <h2>Testimonials</h2>
                            </div>
                            <div class="owl-testimonials">
                                <div class="owl-carousel testi-owl owl-theme">
                                    <div class="item">
                                        <div class="testi-text">
                                            <h6>This is a best plateform for event sharing in the world.</h6>
                                            <p>“ Quisque at arcu ipsum. Proin sit amet diam auctor lectus imperdiet
                                                hendrerit. Quisque laoreet tristique scelerisque. Suspendisse augue nunc,
                                                consequat quis fermentum id, dignissim at mi. Nullam eu lorem fermentum nisl
                                                imperdiet rutrum non ac sapien. ”</p>
                                        </div>
                                        <div class="testi-user-dt">
                                            <h4>Rock William</h4>
                                            <span>Australia</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testi-text">
                                            <h6>This is a best plateform for event sharing in the world.</h6>
                                            <p>“ Quisque at arcu ipsum. Proin sit amet diam auctor lectus imperdiet
                                                hendrerit. Quisque laoreet tristique scelerisque. Suspendisse augue nunc,
                                                consequat quis fermentum id, dignissim at mi. Nullam eu lorem fermentum nisl
                                                imperdiet rutrum non ac sapien. ”</p>
                                        </div>
                                        <div class="testi-user-dt">
                                            <h4>Joginder Singh</h4>
                                            <span>India</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testi-text">
                                            <h6>This is a best plateform for event sharing in the world.</h6>
                                            <p>“ Quisque at arcu ipsum. Proin sit amet diam auctor lectus imperdiet
                                                hendrerit. Quisque laoreet tristique scelerisque. Suspendisse augue nunc,
                                                consequat quis fermentum id, dignissim at mi. Nullam eu lorem fermentum nisl
                                                imperdiet rutrum non ac sapien. ”</p>
                                        </div>
                                        <div class="testi-user-dt">
                                            <h4>Jassica Smith</h4>
                                            <span>Canada</span>
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
