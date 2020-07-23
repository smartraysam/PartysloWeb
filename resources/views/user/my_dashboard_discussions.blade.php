<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>Goeveni - My Dashbaord Discussions</title>
		
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
		<!-- Add Discussion Model Start -->
		<div class="main-discussion-model">
			<div class="modal fade" id="add-discussion-model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Add New Topic</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						  <div class="modal-body">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">									
											<input class="title-discussion-input" type="text" placeholder="What is this discussion about in one brief sentence?">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">									
											<div class="select-bg">									
												<select class="wide" style="display: none;">
													<option>Select Category</option>	
													<option>Music</option>
													<option>Festival</option>
													<option>Art</option>
													<option>Club</option>
													<option>Comedey</option>
													<option>Sports</option>
													<option>Theatre</option>
													<option>Promotions</option>																					
													<option>Others</option>																					
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">									
											<div class="select-bg">									
												<select class="wide" style="display: none;">
													<option value="Music">Music</option>
													<option value="Singer">Singer</option>
													<option value="Cricketer">Cricketer</option>
													<option value="Show">Show</option>
													<option value="Social">Social</option>
													<option value="NGO">NGO</option>
													<option value="Art">Art</option>
													<option value="Writer">Writer</option>
													<option value="Tv">Tv</option>
													<option value="Tech">Tech</option>
													<option value="Fashion">Fashion</option>
													<option value="Beauty">Beauty</option>
													<option value="Health and Fitness">Health and Fitness</option>
													<option value="Festival">Festival</option>
													<option value="Film Promotion">Film Promotion</option>
													<option value="Comedy">Comedy</option>
													<option value="Club">Club</option>
													<option value="Ilets">Ilets</option>
													<option value="Minister">Minister</option>
													<option value="Gym">Gym</option>
													<option value="Fitness Model">Fitness Model</option>
													<option value="Signing">Signing</option>
													<option value="Hockey">Hockey</option>
													<option value="Cricket">Cricket</option>
													<option value="Kushti">Kushti</option>
													<option value="Kabbadi">Kabbadi</option>
													<option value="Wrestling">Wrestling</option>
													<option value="Volyball">Volyball</option>
													<option value="Baseball">Baseball</option>
													<option value="Sports">Sports</option>
													<option value="Restaurant">Restaurant</option>
													<option value="Hotel">Hotel</option>
													<option value="Cafe">Cafe</option>
													<option value="Cloths">Cloths</option>
													<option value="Author">Author</option>
													<option value="Company">Company</option>
													<option value="Ecommerce">Ecommerce</option>
													<option value="Actor">Actor</option>
													<option value="Actress">Actress</option>																										
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">																		
											<div class="screnshot" id="OpenImgUpload">
												<input type="file" id="file">
												<label for="file"><i class="far fa-image"></i> Add Image</label>														
											</div>										
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">																		
											<textarea class="replt-comnt" placeholder="You must select a category before typing here..."></textarea>									
										</div>
									</div>
								</div>
							</div>
						  </div>
						<div class="modal-footer">							
							<button type="button" class="create-topic">Save changes</button>
							<button type="button" class="create-topic-cancel" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- Add Discussion Model End -->
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
		<!-- Body Start -->	
		<main class="dashboard-mp">	
			<div class="dash-todo-thumbnail-area1">
				<div class="todo-thumb1 dash-bg-image1 dash-bg-overlay" style="background-image:url(images/event-view/my-bg.jpg);"></div>
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
									<a class="nav-link active" href="my_dashboard_discussions.html">Discussions</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my_dashboard_events.html">Events</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my_dashboard_followers.html">Followers <span class="badge badge-alrts">20</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my_dashboard_following.html">Following <span class="badge badge-alrts">20</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my_dashboard_messages.html">Messages <span class="badge badge-alrts">2</span></a>
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
					<div class="dash-discussions mb-50">
						<div class="row">
							<div class="col-lg-3 col-md-5">
								<button class="add-topic" type="button" data-toggle="modal" data-target="#add-discussion-model">Add New Topic</button>
								<div class="topic-categories-bg">								
									<a href="#" class="category-topics active">All</a>																					
									<a href="#collapse1" class="category-topics cate-right" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse1">All Tags</a>	
									<div class="collapse" id="collapse1">
										<ul class="tag-card">
											<li><a href="#" class="tag-item1">Music</a></li>
											<li><a href="#" class="tag-item1">Singer</a></li>
											<li><a href="#" class="tag-item1">Cricketer</a></li>
											<li><a href="#" class="tag-item1">Show</a></li>
											<li><a href="#" class="tag-item1">Social</a></li>
											<li><a href="#" class="tag-item1">Art</a></li>
											<li><a href="#" class="tag-item1">Tv</a></li>
											<li><a href="#" class="tag-item1">Tech</a></li>
											<li><a href="#" class="tag-item1">Fashion</a></li>
											<li><a href="#" class="tag-item1">Beauty</a></li>
											<li><a href="#" class="tag-item1">Health and Fitness</a></li>
											<li><a href="#" class="tag-item1">Festival</a></li>
											<li><a href="#" class="tag-item1">Film Promotion</a></li>										
											<li><a href="#" class="tag-item1">Comedey</a></li>										
											<li><a href="#" class="tag-item1">Club</a></li>										
											<li><a href="#" class="tag-item1">Ilets</a></li>																			
										</ul>
									</div>
									<a href="#collapse2" class="category-topics cate-right" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse2">Categories</a>								
										<div class="collapse" id="collapse2">
										<ul class="category-card">
											<li><a href="#" class="category-item1">Music</a></li>																												
											<li><a href="#" class="category-item1">Festival</a></li>																												
											<li><a href="#" class="category-item1">Art</a></li>																												
											<li><a href="#" class="category-item1">Club</a></li>																												
											<li><a href="#" class="category-item1">Comedey</a></li>																												
											<li><a href="#" class="category-item1">Sports</a></li>																												
											<li><a href="#" class="category-item1">Theatre</a></li>																												
											<li><a href="#" class="category-item1">Promotions</a></li>																												
											<li><a href="#" class="category-item1">Others</a></li>																												
										</ul>
									</div>
									<a href="#" class="category-topics">Latest</a>								
									<a href="#" class="category-topics">New(22)</a>								
									<a href="#" class="category-topics">Unread(3)</a>								
									<a href="#" class="category-topics">Top</a>																							
								</div>
								<div class="google-ads-left">
									<img src="images/discussion/ads.jpg" alt="">
								</div>
							</div>
							<div class="col-lg-9 col-md-7">	
								<div class="all-discussions">
									<div class="discussion-heading">
										<h2>All Discussions</h2>
									</div>	
									<div class="all-discussions-items">
										<div class="dis-item">
											<div class="row no-gutters">
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="dis-img-text">
														<img src="images/discussion/img-0.jpg" alt="">
														<a href="single_discussion_view.html"><h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4></a>
													</div>
												</div>	
												<div class="col-lg-4 col-md-12 col-sm-12">
													<ul class="dis-reviews">
														<li>
															<a href="#">5 h</a>
														</li>
														<li>
															<a href="#">3k views</a>
														</li>
														<li>
															<a href="#">5 replies</a>
														</li>
													</ul>												
												</div>	
											</div>	
										</div>
										<div class="dis-item">
											<div class="row no-gutters">
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="dis-img-text">
														<img src="images/discussion/img-0.jpg" alt="">
														<a href="single_discussion_view.html"><h4>ellentesque vitae metus at neque cursus finibus.</h4></a>
													</div>
												</div>	
												<div class="col-lg-4 col-md-12 col-sm-12">
													<ul class="dis-reviews">
														<li>
															<a href="#">6 h</a>
														</li>
														<li>
															<a href="#">6k views</a>
														</li>
														<li>
															<a href="#">10 replies</a>
														</li>
													</ul>												
												</div>	
											</div>	
										</div>
										<div class="dis-item">
											<div class="row no-gutters">
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="dis-img-text">
														<img src="images/discussion/img-0.jpg" alt="">
														<a href="single_discussion_view.html"><h4>Cras vel lorem gravida, ullamcorper mi sed.</h4></a>
													</div>
												</div>	
												<div class="col-lg-4 col-md-12 col-sm-12">
													<ul class="dis-reviews">
														<li>
															<a href="#">6 h</a>
														</li>
														<li>
															<a href="#">7k views</a>
														</li>
														<li>
															<a href="#">15 replies</a>
														</li>
													</ul>												
												</div>	
											</div>	
										</div>
										<div class="dis-item">
											<div class="row no-gutters">
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="dis-img-text">
														<img src="images/discussion/img-0.jpg" alt="">
														<a href="single_discussion_view.html"><h4>Obortis risus. Nunc egestas arcu sit amet blandit finibus.</h4></a>
													</div>
												</div>	
												<div class="col-lg-4 col-md-12 col-sm-12">
													<ul class="dis-reviews">
														<li>
															<a href="#">7 h</a>
														</li>
														<li>
															<a href="#">10k views</a>
														</li>
														<li>
															<a href="#">50 replies</a>
														</li>
													</ul>												
												</div>	
											</div>	
										</div>
										<div class="dis-item">
											<div class="row no-gutters">
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="dis-img-text">
														<img src="images/discussion/img-0.jpg" alt="">
														<a href="single_discussion_view.html"><h4>Quisque in purus ut velit facilisis consequat ac id eros. </h4></a>
													</div>
												</div>	
												<div class="col-lg-4 col-md-12 col-sm-12">
													<ul class="dis-reviews">
														<li>
															<a href="#">7 h</a>
														</li>
														<li>
															<a href="#">7.5k views</a>
														</li>
														<li>
															<a href="#">48 replies</a>
														</li>
													</ul>												
												</div>	
											</div>	
										</div>
										<div class="dis-item">
											<div class="row no-gutters">
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="dis-img-text">
														<img src="images/discussion/img-0.jpg" alt="">
														<a href="single_discussion_view.html"><h4>Pellentesque semper urna est, non egestas massa vestibulum a.</h4></a>
													</div>
												</div>	
												<div class="col-lg-4 col-md-12 col-sm-12">
													<ul class="dis-reviews">
														<li>
															<a href="#">8 h</a>
														</li>
														<li>
															<a href="#">8k views</a>
														</li>
														<li>
															<a href="#">60 replies</a>
														</li>
													</ul>												
												</div>	
											</div>	
										</div>
										<div class="dis-item">
											<div class="row no-gutters">
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="dis-img-text">
														<img src="images/discussion/img-0.jpg" alt="">
														<a href="single_discussion_view.html"><h4>Nunc maximus mauris non tincidunt tincidunt.</h4></a>
													</div>
												</div>	
												<div class="col-lg-4 col-md-12 col-sm-12">
													<ul class="dis-reviews">
														<li>
															<a href="#">9 h</a>
														</li>
														<li>
															<a href="#">8.2k views</a>
														</li>
														<li>
															<a href="#">52 replies</a>
														</li>
													</ul>												
												</div>	
											</div>	
										</div>
										<div class="dis-item">
											<div class="row no-gutters">
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="dis-img-text">
														<img src="images/discussion/img-0.jpg" alt="">
														<a href="single_discussion_view.html"><h4>Sed vehicula, ligula quis efficitur suscipit, risus diam ultrices nisi.</h4></a>
													</div>
												</div>	
												<div class="col-lg-4 col-md-12 col-sm-12">
													<ul class="dis-reviews">
														<li>
															<a href="#">9 h</a>
														</li>
														<li>
															<a href="#">9k views</a>
														</li>
														<li>
															<a href="#">65 replies</a>
														</li>
													</ul>												
												</div>	
											</div>	
										</div>
										<div class="dis-item">
											<div class="row no-gutters">
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="dis-img-text">
														<img src="images/discussion/img-0.jpg" alt="">
														<a href="single_discussion_view.html"><h4>Etiam blandit, nisl sit amet mollis gravida, est ante porttitor dolor.</h4></a>
													</div>
												</div>	
												<div class="col-lg-4 col-md-12 col-sm-12">
													<ul class="dis-reviews">
														<li>
															<a href="#">10 h</a>
														</li>
														<li>
															<a href="#">11k views</a>
														</li>
														<li>
															<a href="#">95 replies</a>
														</li>
													</ul>												
												</div>	
											</div>	
										</div>
										<div class="dis-item">
											<div class="row no-gutters">
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="dis-img-text">
														<img src="images/discussion/img-0.jpg" alt="">
														<a href="single_discussion_view.html"><h4>Maecenas erat augue, venenatis vel lacus nec, blandit volutpat nisl.</h4></a>
													</div>
												</div>	
												<div class="col-lg-4 col-md-12 col-sm-12">
													<ul class="dis-reviews">
														<li>
															<a href="#">11 h</a>
														</li>
														<li>
															<a href="#">10k views</a>
														</li>
														<li>
															<a href="#">105 replies</a>
														</li>
													</ul>												
												</div>	
											</div>	
										</div>
										<div class="blog-pagination">
											<nav aria-label="Page navigation example">
												<ul class="pagination">
													<li class="page-item">
														<a class="page-link" href="#" aria-label="Previous">
															<i class="fas fa-angle-left"></i>
														</a>
													</li>
													<li class="page-item active"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item"><a class="page-link" href="#">...</a></li>
													<li class="page-item"><a class="page-link" href="#">12</a></li>												
													<li class="page-item">
														<a class="page-link" href="#" aria-label="Next">
															<i class="fas fa-angle-right"></i>
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>																
								</div>	
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