@extends('layouts.app')
@section('title', 'Partyslo / User Events')
@section('content')
		<main class="dashboard-mp">	
			<div class="dash-todo-thumbnail-area1">
				<div class="todo-thumb1 dash-bg-image1 dash-bg-overlay" style="background-image:url(images/event-view/other-bg.jpg);"></div>
				<div class="dash-todo-header1">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12">							
								<div class="my-profile-dash">
									<div class="my-dp-dash">
										<img src="images/my-dashboard/other-dp.jpg" alt="">
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
									<h3>Rock William</h3>
									<span>Member since August 2017</span>									
									<span><i class="fas fa-map-marker-alt"></i>India</span>								
								</div>								
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<ul class="right-details">
								<li>
									<div class="user-buttons">
										<div class="my-all-evnts">
											<a href="user_dashboard_events.html">View Events</a>
										</div>
										<div class="user-follow">
											<a href="#">Follow</a>
										</div>
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
									<a class="nav-link" href="user_dashboard_activity.html">Activity</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="user_dashboard_about.html">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="user_dashboard_discussions.html">Discussions</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" href="user_dashboard_events.html">Events</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="user_dashboard_followers.html">Followers <span class="badge badge-alrts">20</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="user_dashboard_following.html">Following <span class="badge badge-alrts">20</span></a>
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
											<input type="text" class="search-1" placeholder="Search events by categories...">
											<i class="fas fa-search srch-ic"></i>
										</div>
									</div>																		
								</div>					
							</div>
							<div class="all-search-filters">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div class="search-filters">
												<div class="search-filters-left">	
													<div class="dropdown">										
														<a href="#" class="filter-d wt-mp dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Category<i class="fas fa-angle-down"></i></a>
														<div class="dropdown-menu cate-dropdown">
															<a class="link-item" href="">Music</a>
															<a class="link-item" href="#">Festival</a>											
															<a class="link-item" href="#">Art</a>
															<a class="link-item" href="#">Club</a>
															<a class="link-item" href="#">Comedy</a>
															<a class="link-item" href="#">Theatre</a>
															<a class="link-item" href="#">Promotions</a>
															<a class="link-item" href="#">Other</a>
														</div>	
													</div>	
													<div class="dropdown">	
														<a href="" class="filter-d dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Worldwide<i class="fas fa-angle-down"></i></a>
														<div class="dropdown-menu worldwide-dropdown">
															<div class="worldwide-form">
																<h6>Location</h6>
																<div class="worldwide-inputs">
																	<form>
																		<div class="form-group">
																			<label>Country / Region*</label>
																			<div class="select-bg">									
																				<select class="wide" style="display: none;">
																					<option>Select Country / Region*</option>	
																					<option>India</option>
																					<option>USA</option>
																					<option>Canada</option>																																		
																					<option>Australia</option>																																		
																					<option>UK</option>																																		
																					<option>Bangladesh</option>																																		
																					<option>Nepal</option>																																		
																					<option>Pakistan</option>																																		
																					<option>Austria</option>																																		
																				</select><div class="nice-select wide" tabindex="0"><span class="current">Select Country / Region*</span><ul class="list"><li data-value="Select Country / Region*" class="option selected">Select Country / Region*</li><li data-value="India" class="option">India</li><li data-value="USA" class="option">USA</li><li data-value="Canada" class="option">Canada</li><li data-value="Australia" class="option">Australia</li><li data-value="UK" class="option">UK</li><li data-value="Bangladesh" class="option">Bangladesh</li><li data-value="Nepal" class="option">Nepal</li><li data-value="Pakistan" class="option">Pakistan</li><li data-value="Austria" class="option">Austria</li></ul></div>
																			</div>
																		</div>
																		<div class="form-group mc-top">															
																			<input class="title-discussion-input" type="text" placeholder="City">
																		</div>																														
																		<button class="create-topic mt-4" type="submit">Apply</button>															
																	</form>
																</div>											
															</div>												
														</div>
													</div>
												</div>
												<div class="search-filters-right dropdown">
													<a href="" class="filter-d dropdown-toggle-no-caret" role="button" data-toggle="dropdown">All Dates<i class="fas fa-angle-down"></i> </a>
													<div class="dropdown-menu date-dropdown dropdown-menu-right">
														<a class="link-item" href="">All Dates</a>
														<a class="link-item" href="#">Upcoming 30 Days</a>											
														<a class="link-item" href="#">Upcoming 20 Days</a>
														<a class="link-item" href="#">Upcoming 15 Days</a>
														<a class="link-item" href="#">Upcoming 10 Days</a>
														<a class="link-item" href="#">Upcoming 5 Days</a>											
													</div>	
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="all-search-events">								
								<div class="row">
									<div class="col-lg-6 col-md-6">
										<div class="event-main-post">
											<div class="event-top">
												<div class="event-top-left">
													<a href="event_detail_view.html"><h4>Event Title Here</h4></a>
												</div>
												<div class="event-top-right">
													<div class="ticket-price">Ticket Price : <span>$15</span></div>
													<div class="post-dt-dropdown dropdown">
														<span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
														<div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
															<a class="post-link-item" href="#">Hide</a>
															<a class="post-link-item" href="#">Details</a>											
															<a class="post-link-item" href="#">User Profile</a>
															<a class="post-link-item" href="#">Report</a>																									
														</div>
													</div>
												</div>
											</div>
											<div class="event-main-image">
												<div class="main-photo">
													<div class="photo-overlay"></div>
													<img src="images/homepage/center/post-img-1.jpg" alt="">
													<div class="post-buttons">
														<div class="left-buttons">
															<ul class="main-btns">
																<li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
																<li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>																		
															</ul>
														</div>
														<div class="right-buttons">
															<ul class="main-btns">
																<li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
																<li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
															</ul>
														</div>
													</div>
												</div>														
											</div>
											<div class="event-city-dt">
												<ul class="city-dt-list">
													<li>
														<div class="it-items">
															<i class="fas fa-map-marker-alt"></i>
															<div class="list-text-dt">
																<span>City</span>
																<ins>London</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-calendar-alt"></i>
															<div class="list-text-dt">
																<span>Date</span>
																<ins>21 Nov 2019</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-clock"></i>
															<div class="list-text-dt">
																<span>Time</span>
																<ins>6 PM to 9 PM</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-cloud-sun"></i>
															<div class="list-text-dt">
																<span>Weather</span>
																<ins>Clear</ins>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<div class="event-go-dt">
												<ul class="go-dt-list">
													<li>
														<div class="it-items">
															<i class="fas fa-check" style="color:#a7a8aa;"></i>
															<div class="list-text-dt">
																<span>Going</span>
																<ins>45</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
															<div class="list-text-dt">
																<span>MayBe</span>
																<ins>120</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-times" style="color:#a7a8aa;"></i>
															<div class="list-text-dt">
																<span>Can't Go</span>
																<ins>70</ins>
															</div>
														</div>
													</li>															
												</ul>
											</div>
											<div class="like-comments">
												<div class="left-comments">
													<a href="#" class="like-item" title="Like">
														<i class="fas fa-heart"></i>
														<span><ins>Like</ins> 251</span>
													</a>
													<a href="#" class="like-item lc-left" title="Comment">
														<i class="fas fa-comment-alt"></i>
														<span><ins>Comment</ins> 10</span>
													</a>
												</div>
												<div class="right-comments">
													<a href="#" class="like-item" title="Share">
														<i class="fas fa-share-alt"></i>
														<span><ins>Share</ins> 21</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="event-main-post">
											<div class="event-top">
												<div class="event-top-left">
													<a href="event_detail_view.html"><h4>Event Title Here</h4></a>
												</div>
												<div class="event-top-right">
													<div class="ticket-price">Ticket Price : <span>$15</span></div>
													<div class="post-dt-dropdown dropdown">
														<span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
														<div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
															<a class="post-link-item" href="#">Hide</a>
															<a class="post-link-item" href="#">Details</a>											
															<a class="post-link-item" href="#">User Profile</a>
															<a class="post-link-item" href="#">Report</a>																									
														</div>
													</div>
												</div>
											</div>
											<div class="event-main-image">
												<div class="main-photo">
													<div class="photo-overlay"></div>
													<img src="images/homepage/center/post-img-2.jpg" alt="">
													<div class="post-buttons">
														<div class="left-buttons">
															<ul class="main-btns">
																<li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
																<li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>																		
															</ul>
														</div>
														<div class="right-buttons">
															<ul class="main-btns">
																<li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
																<li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
															</ul>
														</div>
													</div>
												</div>														
											</div>
											<div class="event-city-dt">
												<ul class="city-dt-list">
													<li>
														<div class="it-items">
															<i class="fas fa-map-marker-alt"></i>
															<div class="list-text-dt">
																<span>City</span>
																<ins>London</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-calendar-alt"></i>
															<div class="list-text-dt">
																<span>Date</span>
																<ins>21 Nov 2019</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-clock"></i>
															<div class="list-text-dt">
																<span>Time</span>
																<ins>6 PM to 9 PM</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-cloud-sun"></i>
															<div class="list-text-dt">
																<span>Weather</span>
																<ins>Clear</ins>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<div class="event-go-dt">
												<ul class="go-dt-list">
													<li>
														<div class="it-items">
															<i class="fas fa-check" style="color:#a7a8aa;"></i>
															<div class="list-text-dt">
																<span>Going</span>
																<ins>45</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
															<div class="list-text-dt">
																<span>MayBe</span>
																<ins>120</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-times" style="color:#a7a8aa;"></i>
															<div class="list-text-dt">
																<span>Can't Go</span>
																<ins>70</ins>
															</div>
														</div>
													</li>															
												</ul>
											</div>
											<div class="like-comments">
												<div class="left-comments">
													<a href="#" class="like-item" title="Like">
														<i class="fas fa-heart"></i>
														<span><ins>Like</ins> 251</span>
													</a>
													<a href="#" class="like-item lc-left" title="Comment">
														<i class="fas fa-comment-alt"></i>
														<span><ins>Comment</ins> 10</span>
													</a>
												</div>
												<div class="right-comments">
													<a href="#" class="like-item" title="Share">
														<i class="fas fa-share-alt"></i>
														<span><ins>Share</ins> 21</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="event-main-post">
											<div class="event-top">
												<div class="event-top-left">
													<a href="event_detail_view.html"><h4>Event Title Here</h4></a>
												</div>
												<div class="event-top-right">
													<div class="ticket-price">Ticket Price : <span>$15</span></div>
													<div class="post-dt-dropdown dropdown">
														<span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
														<div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
															<a class="post-link-item" href="#">Hide</a>
															<a class="post-link-item" href="#">Details</a>											
															<a class="post-link-item" href="#">User Profile</a>
															<a class="post-link-item" href="#">Report</a>																									
														</div>
													</div>
												</div>
											</div>
											<div class="event-main-image">
												<div class="main-photo">
													<div class="photo-overlay"></div>
													<img src="images/homepage/center/post-img-3.jpg" alt="">
													<div class="post-buttons">
														<div class="left-buttons">
															<ul class="main-btns">
																<li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
																<li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>																		
															</ul>
														</div>
														<div class="right-buttons">
															<ul class="main-btns">
																<li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
																<li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
															</ul>
														</div>
													</div>
												</div>														
											</div>
											<div class="event-city-dt">
												<ul class="city-dt-list">
													<li>
														<div class="it-items">
															<i class="fas fa-map-marker-alt"></i>
															<div class="list-text-dt">
																<span>City</span>
																<ins>London</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-calendar-alt"></i>
															<div class="list-text-dt">
																<span>Date</span>
																<ins>21 Nov 2019</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-clock"></i>
															<div class="list-text-dt">
																<span>Time</span>
																<ins>6 PM to 9 PM</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-cloud-sun"></i>
															<div class="list-text-dt">
																<span>Weather</span>
																<ins>Clear</ins>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<div class="event-go-dt">
												<ul class="go-dt-list">
													<li>
														<div class="it-items">
															<i class="fas fa-check" style="color:#a7a8aa;"></i>
															<div class="list-text-dt">
																<span>Going</span>
																<ins>45</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
															<div class="list-text-dt">
																<span>MayBe</span>
																<ins>120</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-times" style="color:#a7a8aa;"></i>
															<div class="list-text-dt">
																<span>Can't Go</span>
																<ins>70</ins>
															</div>
														</div>
													</li>															
												</ul>
											</div>
											<div class="like-comments">
												<div class="left-comments">
													<a href="#" class="like-item" title="Like">
														<i class="fas fa-heart"></i>
														<span><ins>Like</ins> 251</span>
													</a>
													<a href="#" class="like-item lc-left" title="Comment">
														<i class="fas fa-comment-alt"></i>
														<span><ins>Comment</ins> 10</span>
													</a>
												</div>
												<div class="right-comments">
													<a href="#" class="like-item" title="Share">
														<i class="fas fa-share-alt"></i>
														<span><ins>Share</ins> 21</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="event-main-post">
											<div class="event-top">
												<div class="event-top-left">
													<a href="event_detail_view.html"><h4>Event Title Here</h4></a>
												</div>
												<div class="event-top-right">
													<div class="ticket-price">Ticket Price : <span>$15</span></div>
													<div class="post-dt-dropdown dropdown">
														<span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
														<div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
															<a class="post-link-item" href="#">Hide</a>
															<a class="post-link-item" href="#">Details</a>											
															<a class="post-link-item" href="#">User Profile</a>
															<a class="post-link-item" href="#">Report</a>																									
														</div>
													</div>
												</div>
											</div>
											<div class="event-main-image">
												<div class="main-photo">
													<div class="photo-overlay"></div>
													<img src="images/homepage/center/post-img-4.jpg" alt="">
													<div class="post-buttons">
														<div class="left-buttons">
															<ul class="main-btns">
																<li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
																<li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>																		
															</ul>
														</div>
														<div class="right-buttons">
															<ul class="main-btns">
																<li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
																<li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
															</ul>
														</div>
													</div>
												</div>														
											</div>
											<div class="event-city-dt">
												<ul class="city-dt-list">
													<li>
														<div class="it-items">
															<i class="fas fa-map-marker-alt"></i>
															<div class="list-text-dt">
																<span>City</span>
																<ins>London</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-calendar-alt"></i>
															<div class="list-text-dt">
																<span>Date</span>
																<ins>21 Nov 2019</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-clock"></i>
															<div class="list-text-dt">
																<span>Time</span>
																<ins>6 PM to 9 PM</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-cloud-sun"></i>
															<div class="list-text-dt">
																<span>Weather</span>
																<ins>Clear</ins>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<div class="event-go-dt">
												<ul class="go-dt-list">
													<li>
														<div class="it-items">
															<i class="fas fa-check" style="color:#a7a8aa;"></i>
															<div class="list-text-dt">
																<span>Going</span>
																<ins>45</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
															<div class="list-text-dt">
																<span>MayBe</span>
																<ins>120</ins>
															</div>
														</div>
													</li>
													<li>
														<div class="it-items">
															<i class="fas fa-times" style="color:#a7a8aa;"></i>
															<div class="list-text-dt">
																<span>Can't Go</span>
																<ins>70</ins>
															</div>
														</div>
													</li>															
												</ul>
											</div>
											<div class="like-comments">
												<div class="left-comments">
													<a href="#" class="like-item" title="Like">
														<i class="fas fa-heart"></i>
														<span><ins>Like</ins> 251</span>
													</a>
													<a href="#" class="like-item lc-left" title="Comment">
														<i class="fas fa-comment-alt"></i>
														<span><ins>Comment</ins> 10</span>
													</a>
												</div>
												<div class="right-comments">
													<a href="#" class="like-item" title="Share">
														<i class="fas fa-share-alt"></i>
														<span><ins>Share</ins> 21</span>
													</a>
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