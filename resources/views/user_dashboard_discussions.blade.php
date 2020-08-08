@extends('layouts.app')
@section('title', 'Partyslo / User Discussions')
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
									<a class="nav-link active" href="user_dashboard_discussions.html">Discussions</a>
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
					</div>
					<div class="dash-discussions mb-50">
						<div class="row">
							<div class="col-lg-3 col-md-5">								
								<div class="topic-categories-bg mt-0">								
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
														<img src="images/discussion/img-7.jpg" alt="">
														<a href="event_detail_view.html"><h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4></a>
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
														<img src="images/discussion/img-7.jpg" alt="">
														<a href="event_detail_view.html"><h4>ellentesque vitae metus at neque cursus finibus.</h4></a>
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
														<img src="images/discussion/img-7.jpg" alt="">
														<a href="event_detail_view.html"><h4>Cras vel lorem gravida, ullamcorper mi sed.</h4></a>
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
														<img src="images/discussion/img-7.jpg" alt="">
														<a href="event_detail_view.html"><h4>Obortis risus. Nunc egestas arcu sit amet blandit finibus.</h4></a>
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
														<img src="images/discussion/img-7.jpg" alt="">
														<a href="event_detail_view.html"><h4>Quisque in purus ut velit facilisis consequat ac id eros. </h4></a>
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
														<img src="images/discussion/img-7.jpg" alt="">
														<a href="event_detail_view.html"><h4>Pellentesque semper urna est, non egestas massa vestibulum a.</h4></a>
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
														<img src="images/discussion/img-7.jpg" alt="">
														<a href="event_detail_view.html"><h4>Nunc maximus mauris non tincidunt tincidunt.</h4></a>
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
														<img src="images/discussion/img-7.jpg" alt="">
														<a href="event_detail_view.html"><h4>Sed vehicula, ligula quis efficitur suscipit, risus diam ultrices nisi.</h4></a>
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
														<img src="images/discussion/img-7.jpg" alt="">
														<a href="event_detail_view.html"><h4>Etiam blandit, nisl sit amet mollis gravida, est ante porttitor dolor.</h4></a>
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
														<img src="images/discussion/img-7.jpg" alt="">
														<a href="event_detail_view.html"><h4>Maecenas erat augue, venenatis vel lacus nec, blandit volutpat nisl.</h4></a>
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
	@endsection