@extends('layouts.app')
@section('title', 'Partyslo / User About')
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
									<a class="nav-link active" href="user_dashboard_about.html">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="user_dashboard_discussions.html">Discussions</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="user_dashboard_events.html">Events</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="user_dashboard_followers.html">Followers <span class="badge badge-alrts">20</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="user_dashboard_following.html">Following <span class="badge badge-alrts">20</span></a>
								</li>							
							</ul>
						</div>
						<div class="col-lg-3 col-md-5">
							<div class="user-data full-width">
								<div class="about-left-heading">
									<h3>Personal Info</h3>									
								</div>
								<ul class="about-dt-items">
									<li>
										<div class="about-itdts">
											<div class="about-1">
												Member Since
											</div>
											<div class="about-2">
												August 2017
											</div>
										</div>
									</li>
									<li>
										<div class="about-itdts">
											<div class="about-1">
												Lives in
											</div>
											<div class="about-2">
												India
											</div>
										</div>
									</li>
									<li>
										<div class="about-itdts">
											<div class="about-1">
												Birthday
											</div>
											<div class="about-2">
												29 August 1991
											</div>
										</div>
									</li>
									<li>
										<div class="about-itdts">
											<div class="about-1">
												Gender
											</div>
											<div class="about-2">
												Male
											</div>
										</div>
									</li>
									<li>
										<div class="about-itdts">
											<div class="about-1">
												Status
											</div>
											<div class="about-2">
												Single
											</div>
										</div>
									</li>
									<li>
										<div class="about-itdts">
											<div class="about-1">
												Email
											</div>
											<div class="about-2">
												rockwilliam@gmail.com
											</div>
										</div>
									</li>
									<li>
										<div class="about-itdts">
											<div class="about-1">
												Phone No.
											</div>
											<div class="about-2">
												+91 123 456 7890
											</div>
										</div>
									</li>
									<li>
										<div class="about-itdts">
											<div class="about-1">
												Member Since
											</div>
											<div class="about-2">
												August 2017
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="user-data full-width">
								<div class="about-left-heading">
									<h3>Social Accounts</h3>									
								</div>
								<div class="categories-items">
									<a class="category-social-item" href="#"><i class="fas fa-globe" style="color:#51a5fb;"></i>www.example.com</a>																			
									<a class="category-social-item" href="#"><i class="fab fa-facebook-square" style="color:#3b5998;"></i>http://www.facebook.com</a>																			
									<a class="category-social-item" href="#"><i class="fab fa-twitter" style="color:#1da1f2;"></i>http://www.twitter.com</a>																			
									<a class="category-social-item" href="#"><i class="fab fa-google-plus" style="color:#dd4b39;"></i>http://www.googleplus.com</a>																			
									<a class="category-social-item" href="#"><i class="fab fa-instagram" style="color:#405de6;"></i>http://www.instagram.com</a>																																													
									<a class="category-social-item" href="#"><i class="fab fa-pinterest" style="color:#bd081c;"></i>http://www.pinterest.com</a>
									<a class="category-social-item" href="#"><i class="fab fa-linkedin" style="color:#0077b5;"></i>http://www.linkedin.com</a>										
									<a class="category-social-item" href="#"><i class="fab fa-youtube" style="color:#ff0000;"></i>http://www.youtube.com/</a>																			
								</div>
							</div>						
						</div>
						<div class="col-lg-9 col-md-7">	
							<div class="user-data full-width">
								<div class="about-left-heading">
									<h3>About</h3>									
								</div>
								<div class="about-dt-des">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl. Nunc suscipit nulla dapibus nisi vestibulum tincidunt. Cras vestibulum vel ante et porttitor. Duis luctus consequat purus. Duis bibendum eget enim nec posuere. Aliquam purus lectus, blandit aliquam enim nec, viverra egestas libero. Suspendisse dictum neque et finibus posuere. </p>
								</div>
							</div>							
							<div class="user-data full-width">
								<div class="about-left-heading">
									<h3>Hobbies</h3>									
								</div>
								<div class="about-hobbies">
									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="all-hobbies">
												<h6>Favourite Music</h6>
												<span>Folk, Rap, Solo, Hiphop</span>
											</div>
											<div class="all-hobbies">
												<h6>Favourite Books</h6>
												<span>Novel, Comics, Jokes, Love Stories, Secience, History</span>
											</div>
											<div class="all-hobbies">
												<h6>Favourite Music</h6>
												<span>Dangle, Na Peru Suriya, Raja the Great, Bahubali 2</span>
											</div>
											<div class="all-hobbies">
												<h6>Favourite Tv Shows</h6>
												<span>The Kapil Sharma Show, Kulfi, CID, Big Boss</span>
											</div>											
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="all-hobbies">
												<h6>Favourite Games</h6>
												<span>Cricket, Football, Hockey, Kabaddi</span>
											</div>
											<div class="all-hobbies">
												<h6>Favourite Brands</h6>
												<span>Apple, Oppo, Nike, Addidas, Puma. Jack & Jone, Nokia</span>
											</div>
											<div class="all-hobbies">
												<h6>Favourite Artists</h6>
												<span>Babbu Maan, Salman Khan, Kapil Sharma, Priyanka Chopra</span>
											</div>
											<div class="all-hobbies">
												<h6>Other Interests</h6>
												<span>Travel, Hiking, Web designing</span>
											</div>											
										</div>
									</div>
								</div>
							</div>
							<div class="edu-emp-items">
								<div class="row">
									<div class="col-lg-6 col-md-12">
										<div class="user-data full-width mb-20">
											<div class="about-left-heading">
												<h3>Education</h3>												
											</div>
											<div class="about-hobbies">												
												<div class="all-hobbies">
													<h6>Master of Science in Information Technology</h6>
													<span>2014 - 2016</span>
													<a href="#">Lovelt Professional University</a>
												</div>
												<div class="all-hobbies">
													<h6>Bachelor of Science in Information Technology</h6>
													<span>2011 - 2014</span>
													<a href="#">Punjab Technical University</a>
												</div>
												<div class="all-hobbies">
													<h6>Graphic Designing Course</h6>
													<span>2016 - 2017</span>
													<a href="#">Gambol Information Institute</a>
												</div>	
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-12">
										<div class="user-data full-width mb-20">
											<div class="about-left-heading">
												<h3>Education</h3>												
											</div>
											<div class="about-hobbies">												
												<div class="all-hobbies">
													<h6>Owner and Founder</h6>
													<span>2017 - Present</span>
													<a href="#">Gambol Themes</a>
												</div>
												<div class="all-hobbies">
													<h6>Graphic Designer</h6>
													<span>2016 - 2017</span>
													<a href="#">Company Name</a>
												</div>
												<div class="all-hobbies">
													<h6>Web Designer</h6>
													<span>2016 - 2017</span>
													<a href="#">Company Name</a>
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