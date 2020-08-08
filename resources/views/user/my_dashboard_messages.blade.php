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
									<a class="nav-link" href="my_dashboard_followers.html">Followers <span class="badge badge-alrts">20</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my_dashboard_following.html">Following <span class="badge badge-alrts">20</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" href="my_dashboard_messages.html">Messages <span class="badge badge-alrts">2</span></a>
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
					<div class="dash-discussions mb-20 bpm-50">
						<div id="content-wrapper">
							<div class="container-fluid pb-0">
							 <!-- Profile Detail Area Start-->
								<div class="row">
									<div class="col-lg-4 msg col-sm-12">
										<div class="rightbox">
											<div class="rightside">
												<a href="#"><i class="fas fa-search"></i></a>
												<input type="text" placeholder="Enter a keyword">
											</div>
											<div class="msg-scroll">
												<div class="rightmsg">
													<div class="message-radius">
														<img src="images/messages/1_chat.jpg" alt="" title="" >
													</div>
													<div class="message-heading">
														<a href="#"><h4>Rock William</h4></a>
														<p>Hi what are you doing</p>
													</div>
													<div class="message-heading1">
														<span>Today, 02.00PM</span>
													</div>
													<div class="clearfix"></div>													
												</div>
												<div class="rightmsg">
													<div class="message-radius">
														<img src="images/messages/2_chat.jpg" alt="" title="" >
													</div>
													<div class="message-heading">
														<a href="#"><h4>Joy Smith</h4></a>
														<p>Hi how are you miss</p>
													</div>
													<div class="message-heading1">
														<span>Today, 02.50PM</span>
													</div>										
													<div class="clearfix"></div>													
												</div>
												<div class="rightmsg">
													<div class="message-radius">
														<img src="images/messages/3_chat.jpg" alt="" title="" >
													</div>
													<div class="message-heading">
														<a href="#"><h4>Johnson Dua</h4></a>
														<p>Hi how are you Today</p>
													</div>
													<div class="message-heading1">
														<span>Yesterday, 11.50AM</span>
													</div>										
													<div class="clearfix"></div>													
												</div>									
											</div>
										</div>						
									</div>
									<div class="col-lg-8 col-md-12 col-sm-12">
										<div class="main-conversation-box">
											<div class="message-bar-head">
												<div class="usr-msg-details">
													<div class="usr-ms-img">
														<img src="images/messages/1_chat.jpg" alt="" class="mCS_img_loaded">
													</div>
													<div class="usr-mg-info">
														<a href="#"><h3>John Doe</h3></a>
														<p>Online</p>
													</div><!--usr-mg-info end-->
												</div>
												<div class="message-heading2">										
													<i class="fas fa-trash-alt"></i>								  										
												</div>
											</div><!--message-bar-head end-->
											<div class="messages-line mCustomScrollbar _mCS_1">
												<div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;">
													<div id="mCSB_1_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px;" dir="ltr">
														<div class="main-message-box">
															<div class="messg-usr-img">
																<a href="#"><img src="images/messages/1_chat.jpg" alt="" class="mCS_img_loaded"></a>
															</div><!--messg-usr-img end-->													
														</div><!--main-message-box end-->
														<div class="main-message-box ta-right">
															<div class="message-dt">
																<div class="message-inner-dt">
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
																</div><!--message-inner-dt end-->
																<span>Sat, Aug 23, 1:08 PM</span>
															</div><!--message-dt end-->										
														</div><!--main-message-box end-->
														<div class="main-message-box st3">
															<div class="message-dt st3">
																<div class="message-inner-dt">
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget.</p>
																</div><!--message-inner-dt end-->
																<span>5 minutes ago</span>
															</div><!--message-dt end-->
															<div class="messg-usr-img">
																<a href="#"><img src="images/messages/5_chat_small.jpg" alt="" class="mCS_img_loaded"></a>
															</div><!--messg-usr-img end-->
														</div><!--main-message-box end-->
														<div class="main-message-box ta-right">
															<div class="message-dt">
																<div class="message-inner-dt">
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
																</div><!--message-inner-dt end-->
																<span>Sat, Aug 23, 1:08 PM</span>
															</div><!--message-dt end-->										
														</div><!--main-message-box end-->
														<div class="main-message-box st3">
															<div class="message-dt st3">
																<div class="message-inner-dt">
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget </p>
																</div><!--message-inner-dt end-->
																<span>Typing...</span>
															</div><!--message-dt end-->
															<div class="messg-usr-img">
																<a href="#"><img src="images/messages/5_chat_small.jpg" alt="" class="mCS_img_loaded"></a>
															</div><!--messg-usr-img end-->
														</div><!--main-message-box end-->
														
													</div>
													<div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;">
														<div class="mCSB_draggerContainer">
															<div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 458px; max-height: 594px; top: 0px;">
																<div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
															</div>
														<div class="mCSB_draggerRail"></div>
														</div>
													</div>
												</div>
											</div><!--messages-line end-->
											<div class="message-send-area">
												<form>
													<div class="mf-field">
														<input type="text" name="message" placeholder="Type a message here">
														<button type="submit">Send</button>
													</div>
													
												</form>
											</div><!--message-send-area end-->
										</div><!--main-conversation-box end-->
									</div>
								</div>
							</div>
						</div>
					  <!--content-wrapper End-->
					</div>
				</div>
			</div>
		</main>
	
@endsection