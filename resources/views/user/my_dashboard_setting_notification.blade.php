@extends('layouts.app')
@section('title', 'Partyslo / Dashboard')
@section('content')
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
										<a href="my_dashboard_events">View Events</a>
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
										<a class="tab-item-1" href="my_dashboard_setting_social.html">Social Networks</a>																				
										<a class="tab-item-1" href="my_dashboard_setting_email.html">Email Setting</a>																				
										<a class="tab-item-1 active" href="my_dashboard_setting_notification.html">Notification Setting</a>																			
										<a class="tab-item-1" href="my_dashboard_setting_change_pass.html">Change Password</a>																			
										<a class="tab-item-1" href="my_dashboard_setting_delete_account.html">Deactivate Account</a>																																															
									</div>
								</div>						
							</div>
							<div class="col-lg-9 col-md-7">	
								<div class="setting-form">
									<form>
										<div class="user-data full-width">
											<div class="about-left-heading">
												<h3>Notification Setting</h3>										
											</div>
											<div class="noti-sting1">
												<div class="row">
													<div class="col-lg-12 col-md-12">													
														<div class="noti-all-st">
															<ul>
																<li>
																	<div class="noti-st">
																		<div class="noti-left-t">
																			Message alert on screen
																		</div>
																		<div class="noti-right-b">
																			<div class="custom-control custom-switch">
																			  <input type="checkbox" class="custom-control-input" id="customSwitch1">
																			  <label class="custom-control-label" for="customSwitch1"></label>
																			</div>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="noti-st">
																		<div class="noti-left-t">
																			Activity on my posts
																		</div>
																		<div class="noti-right-b">
																			<div class="custom-control custom-switch">
																			  <input type="checkbox" class="custom-control-input" id="customSwitch2">
																			  <label class="custom-control-label" for="customSwitch2"></label>
																			</div>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="noti-st">
																		<div class="noti-left-t">
																			Someone follows me
																		</div>
																		<div class="noti-right-b">
																			<div class="custom-control custom-switch">
																			  <input type="checkbox" class="custom-control-input" id="customSwitch3">
																			  <label class="custom-control-label" for="customSwitch3"></label>
																			</div>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="noti-st">
																		<div class="noti-left-t">
																			Update from Goeveni
																		</div>
																		<div class="noti-right-b">
																			<div class="custom-control custom-switch">
																			  <input type="checkbox" class="custom-control-input" id="customSwitch4">
																			  <label class="custom-control-label" for="customSwitch4"></label>
																			</div>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="noti-st">
																		<div class="noti-left-t">
																			Hide my profile from search engine
																		</div>
																		<div class="noti-right-b">
																			<div class="custom-control custom-switch">
																			  <input type="checkbox" class="custom-control-input" id="customSwitch5">
																			  <label class="custom-control-label" for="customSwitch5"></label>
																			</div>
																		</div>
																	</div>
																</li>											
															</ul>
														</div>															
													</div>																																				
												</div>
											</div>
										</div>																					
									</form>
								</div>					
							</div>	
						</div>
					</div>
				</div>
			</div>
		</main>
	
@endsection