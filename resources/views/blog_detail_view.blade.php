<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>Goeveni - Blog Detail View</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">
		
		<!-- Stylesheets -->
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/datepicker.min.css" rel="stylesheet">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	
	</head>

	<body>		
		<!-- Header Start -->
		<header>
			<div class="container">				
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<nav class="navbar navbar-expand-lg navbar-light bg-dark1 justify-content-sm-start">
							<a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto" href="index.html"><img src="images/logo.svg" alt=""></a>
							<button class="navbar-toggler align-self-start" type="button">
								<i class="fas fa-bars"></i>
							</button>
							<div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
								<ul class="navbar-nav align-self-stretch">
									<li class="nav-item active">
										<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="discussions.html">Discussion</a>
									</li>									
									<li class="nav-item">
										<a class="nav-link" href="weather.html">Weather</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
											Pages
										</a>
										<div class="dropdown-menu pages-dropdown">
											<a class="link-item" href="login.html">Login</a>
											<a class="link-item" href="register.html">Register</a>											
											<a class="link-item" href="error_404.html">Error 404</a>
											<a class="link-item" href="categories.html">Categories</a>
											<a class="link-item" href="select_seats.html">Select Seats</a>
											<a class="link-item" href="find_friends.html">Find Friends</a>
											<a class="link-item" href="user_dashboard_activity.html">User Detail View</a>
											<a class="link-item" href="checkout.html">Checkout</a>
											<a class="link-item" href="confirmed_order.html">Confirmed Order</a>
											<a class="link-item" href="about.html">About</a>
											<a class="link-item" href="contact_us.html">Contact</a>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="our_blog.html">Blog</a>
									</li>
								</ul>
								<a href="add_new_event.html" class="add-event">Add New Event</a>
							</div>
							<ul class="group-icons">
								<li><a href="search_result.html" class="icon-set"><i class="fas fa-search"></i></a></li>
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
											<a href="my_dashboard_all_requests.html" class="view-all">View All Friend Requests</a>
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
											<a href="my_dashboard_all_notifications.html" class="view-all">View All Notifications</a>
										</div>	
									</div>
								</li>
							</ul>
							<div class="account order-1 dropdown">
								<a href="#" class="account-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown"> 
									<div class="user-dp"><img src="images/dp.jpg" alt=""></div>
									<span>Hi! John</span>
									<i class="fas fa-angle-down"></i>
								</a>
								<div class="dropdown-menu account-dropdown dropdown-menu-right">
									<a class="link-item" href="my_dashboard_activity.html">Profile</a>
									<a class="link-item" href="my_dashboard_messages.html">Messages</a>											
									<a class="link-item" href="my_dashboard_booked_events.html">Booked Events</a>
									<a class="link-item" href="my_dashboard_credits.html">Credit <span class="right-cm">$100</span></a>
									<a class="link-item" href="invite.html">Invite</a>
									<a class="link-item" href="my_dashboard_setting_info.html">Setting</a>
									<a class="link-item" href="login.html">Logout</a>									
								</div>
							</div>							
						</nav>
						<div class="overlay"></div>
					</div>					
				</div>					
			</div>
		</header>
		<!-- Header End -->
		<!-- Title Bar Start -->
		<div class="title-bar">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="title-bar-text">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>							
							<li class="breadcrumb-item"><a href="our-blog.html">Our Blog</a></li>							
							<li class="breadcrumb-item active" aria-current="page">Blog Detail View</li>
						</ol>
					</div>		
				</div>		
			</div>		
		</div>		
		<!-- Title Bar End -->
		<!-- Body Start -->	
		<main class="blog-mp">	
			<div class="main-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4">							
							<div class="search-blog-dt">										
								<input class="search-blog" type="Search" placeholder="Search Keyword...">								
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
									<a class="category-item" href="#"><i class="fas fa-ellipsis-h"></i>Others</a>										
								</div>
							</div>
							<div class="user-data full-width">
								<div class="categories-left-heading">
									<h3>Monst Viewed Posts</h3>							
								</div>
								<ul class="left-blog-items">
									<li>
										<div class="left-blog-bg">
											<div class="blog-dt-itm">
												<a href="#"><h4>Blog Title Goes Here</h4></a>
												<span>November 13, 2019</span>
											</div>
										</div>
									</li>
									<li>
										<div class="left-blog-bg">
											<div class="blog-dt-itm">
												<a href="#"><h4>Blog Title Goes Here</h4></a>
												<span>November 12, 2019</span>
											</div>
										</div>
									</li>
									<li>
										<div class="left-blog-bg">
											<div class="blog-dt-itm">
												<a href="#"><h4>Blog Title Goes Here</h4></a>
												<span>November 10, 2019</span>
											</div>
										</div>
									</li>
									<li>
										<div class="left-blog-bg">
											<div class="blog-dt-itm">
												<a href="#"><h4>Blog Title Goes Here</h4></a>
												<span>November 9, 2019</span>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-md-8">
							<div class="blog-main-img">
								<img src="images/our-blog/big-1.jpg" alt="">
							</div>
							<div class="by-category-cmnt">
								<div class="by-user s">
									Category : <a href="#">Music,</a><a href="#">Club</a>
								</div>
								<div class="comnt-rght">
									<a href="#"><i class="far fa-comment"></i> 3 comment</a>
								</div>
							</div>
							<div class="date-user1">
								<div class="date-itm-left">
									1 month ago
								</div>
								<div class="usr-itm-right">
									By : <a href="#">John Doe</a>
								</div>
							</div>
							<div class="blog-main-content">
								<div class="blog-title-des">
									<h2>Blog Title Goes Here</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at enim ligula. Phasellus condimentum euismod magna ac aliquet. Sed enim magna, cursus ut lectus in, ullamcorper semper est. Nullam vestibulum imperdiet mi. Etiam hendrerit purus non dolor pretium ullamcorper. Donec varius magna turpis, nec ultricies purus mattis nec. Phasellus arcu purus, interdum eu sem sit amet, sagittis blandit ligula. Proin hendrerit sollicitudin fringilla. Vestibulum convallis augue volutpat volutpat molestie. Nulla porttitor laoreet augue non vehicula. Vestibulum et dui quis magna dignissim dictum. Etiam eget libero nibh. Mauris purus turpis, sagittis et ipsum a, egestas blandit dui. Aenean dignissim sem ut maximus scelerisque. Mauris vitae ante nec velit posuere molestie non in diam. Integer efficitur augue tristique purus fringilla auctor. Etiam ultricies elementum urna, ut placerat ante pellentesque in. Nullam pulvinar, nibh sit amet volutpat ornare, arcu lacus pretium lorem, nec congue dui elit quis risus. Phasellus fringilla sagittis urna, vel congue nunc dignissim eget. Pellentesque non tempus tellus. Integer at mi volutpat, congue metus quis, lacinia eros. Aliquam at nisi sagittis, placerat leo non.</p>
									<p>Aenean dignissim sem ut maximus scelerisque. Mauris vitae ante nec velit posuere molestie non in diam. Integer efficitur augue tristique purus fringilla auctor. Etiam ultricies elementum urna, ut placerat ante pellentesque in. Nullam pulvinar, nibh sit amet volutpat ornare, arcu lacus pretium lorem, nec congue dui elit quis risus. Phasellus fringilla sagittis urna, vel congue nunc dignissim eget. Pellentesque non tempus tellus. Integer at mi volutpat, congue metus quis, lacinia eros. Aliquam at nisi sagittis, placerat leo non.</p>
								</div>
							</div>
							<div class="by-tags-social">
								<div class="by-user s">
									Tags : <a href="#">Music,</a><a href="#">Club,</a><a href="#">DJ</a>
								</div>
								<div class="comnt-rght">									
									<ul class="share-social-links">
										<li><div class="shre-txt">Share :</div></li>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#"><i class="fab fa-youtube"></i></a></li>
									</ul>									
								</div>
							</div>
							<div class="related-posts">																
								<div class="related-title">
									<h2>Related Posts</h2>
								</div>																	
								<div class="owl-carousel related-owl owl-theme">
									<div class="item">
										<div class="our-blogs">								
											<div class="blog-img">
												<a href="#"><img src="images/our-blog/img-1.jpg" alt=""></a>
											</div>
											<div class="blog-item1">
												<span>1 month ago</span>
												<a href="#"><h4>Blog Title Goes Here</h4></a>																			
												<div class="by-cmmnt">
													<div class="by-user">
														By <a href="user_dashboard_activity.html">John Doe</a>
													</div>
													<div class="comnt-rght">
														<a href="#"><i class="far fa-comment"></i> 3 comment</a>
													</div>
												</div>	
											</div>																
										</div>
									</div>
									<div class="item">
										<div class="our-blogs">								
											<div class="blog-img">
												<a href="#"><img src="images/our-blog/img-2.jpg" alt=""></a>
											</div>
											<div class="blog-item1">
												<span>1 month ago</span>
												<a href="#"><h4>Blog Title Goes Here</h4></a>																			
												<div class="by-cmmnt">
													<div class="by-user">
														By <a href="user_dashboard_activity.html">John Doe</a>
													</div>
													<div class="comnt-rght">
														<a href="#"><i class="far fa-comment"></i> 3 comment</a>
													</div>
												</div>	
											</div>																
										</div>
									</div>
									<div class="item">
										<div class="our-blogs">								
											<div class="blog-img">
												<a href="#"><img src="images/our-blog/img-3.jpg" alt=""></a>
											</div>
											<div class="blog-item1">
												<span>1 month ago</span>
												<a href="#"><h4>Blog Title Goes Here</h4></a>																			
												<div class="by-cmmnt">
													<div class="by-user">
														By <a href="user_dashboard_activity.html">John Doe</a>
													</div>
													<div class="comnt-rght">
														<a href="#"><i class="far fa-comment"></i> 3 comment</a>
													</div>
												</div>	
											</div>																
										</div>
									</div>
									<div class="item">
										<div class="our-blogs">								
											<div class="blog-img">
												<a href="#"><img src="images/our-blog/img-4.jpg" alt=""></a>
											</div>
											<div class="blog-item1">
												<span>1 month ago</span>
												<a href="#"><h4>Blog Title Goes Here</h4></a>																			
												<div class="by-cmmnt">
													<div class="by-user">
														By <a href="user_dashboard_activity.html">John Doe</a>
													</div>
													<div class="comnt-rght">
														<a href="#"><i class="far fa-comment"></i> 3 comment</a>
													</div>
												</div>	
											</div>																
										</div>
									</div>
									<div class="item">
										<div class="our-blogs">								
											<div class="blog-img">
												<a href="#"><img src="images/our-blog/img-5.jpg" alt=""></a>
											</div>
											<div class="blog-item1">
												<span>1 month ago</span>
												<a href="#"><h4>Blog Title Goes Here</h4></a>																			
												<div class="by-cmmnt">
													<div class="by-user">
														By <a href="user_dashboard_activity.html">John Doe</a>
													</div>
													<div class="comnt-rght">
														<a href="#"><i class="far fa-comment"></i> 3 comment</a>
													</div>
												</div>	
											</div>																
										</div>
									</div>
									<div class="item">
										<div class="our-blogs">								
											<div class="blog-img">
												<a href="#"><img src="images/our-blog/img-6.jpg" alt=""></a>
											</div>
											<div class="blog-item1">
												<span>1 month ago</span>
												<a href="#"><h4>Blog Title Goes Here</h4></a>																			
												<div class="by-cmmnt">
													<div class="by-user">
														By <a href="user_dashboard_activity.html">John Doe</a>
													</div>
													<div class="comnt-rght">
														<a href="#"><i class="far fa-comment"></i> 3 comment</a>
													</div>
												</div>	
											</div>																
										</div>
									</div>									
								</div>
							</div>
							<div class="blog-comments">
								<div class="blog-comment-title">
									<h2>03 Comments</h2>
								</div>
								<div class="blog-post-comment">
									<div class="blog-post-bg">
										<div class="commntr-dp">
											<img src="images/event-view/user-1.jpg" alt="">
										</div>
										<form>
											<input class="bcomment-post" type="text" placeholder="Write a comment">
											<button class="blog-post-btn" type="submit">Post Comment</button>
										</form>
									</div>
								</div>
								<div class="blog-comntd-bg">
									<div class="bcmnt-dt">
										<div class="blog-usr-dt">
											<img src="images/event-view/user-2.jpg" alt="">
											<a href="user_dashboard_activity.html"><h4>Rock Smith</h4></a>												
										</div>
										<p>Sed pulvinar non tellus non venenatis. Mauris urna lacus, ornare quis purus vel, tempor placerat leo. Nunc massa nibh, viverra eu nisl vitae, ornare luctus nisi. Vivamus dictum sed felis vel sollicitudin.</p>
									</div>
									<div class="breply-dt">
										<div class="blog-usr-dt2">
											<img src="images/event-view/my-reply-dp.jpg" alt="">
											<a href="user_dashboard_activity.html"><h4>John Doe</h4></a>
										</div>
										<p>Thanks</p>
									</div>
									<div class="blog-post-reply">
										<div class="breply-dp1">
											<img src="images/event-view/user-1.jpg" alt="">
										</div>
										<form>
											<input class="breply-post" type="text" placeholder="Write a reply">
											<button class="breply-post-btn" type="submit">Reply</button>
										</form>
									</div>
								</div>
								<div class="blog-comntd-bg">
									<div class="bcmnt-dt">
										<div class="blog-usr-dt">
											<img src="images/event-view/user-3.jpg" alt="">
											<a href="user_dashboard_activity.html"><h4>Jassica William</h4></a>												
										</div>
										<p>Sed pulvinar non tellus non venenatis. Mauris urna lacus, ornare quis purus vel, tempor placerat leo. Nunc massa nibh, viverra eu nisl vitae, ornare luctus nisi. Vivamus dictum sed felis vel sollicitudin.</p>
									</div>									
									<div class="blog-post-reply">
										<div class="breply-dp1">
											<img src="images/event-view/user-1.jpg" alt="">
										</div>
										<form>
											<input class="breply-post" type="text" placeholder="Write a reply">
											<button class="breply-post-btn" type="submit">Reply</button>
										</form>
									</div>
								</div>
								<div class="bno-more">No More Comments</div>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</main>
		<!-- Body End -->			
		<!-- Footer Start -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="footer-left">
							<ul>
								<li><a href="privacy_policy.html">Privacy</a></li>
								<li><a href="term_conditions.html">Term and Conditions</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact_us.html">Contact Us</a></li>								
							</ul>
						</div>
					</div>					
					<div class="col-lg-6 col-md-12">
						<div class="footer-right">
							<ul class="copyright-text">
								<li><a href="index.html"><img src="images/logo-2.svg" alt=""></a></li>
								<li><div class="ftr-1"><i class="far fa-copyright"></i> 2019 Goeveni by <a href="https://themeforest.net/user/gambolthemes">Gambolthemes</a>. All Rights Reserved.</div></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer End -->
		<!-- Scripts js -->	
		<script src="js/jquery.min.js"></script>
		<script src="js/skills-search.js"></script>
		<script src="js/jquery.nice-select.js"></script>
		<script src="js/datepicker.min.js"></script>
		<script src="js/i18n/datepicker.en.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="vendor/OwlCarousel/owl.carousel.js"></script>		
		<script src="js/custom1.js"></script>	
				
	</body>
	
</html>