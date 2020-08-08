@extends('layouts.app')
@section('title', 'Partyslo / Dashboard')
@section('content')
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
@endsection