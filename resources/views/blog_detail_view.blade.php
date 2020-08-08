@extends('layouts.app')
@section('title', 'Partyslo / Blog Details')
@section('content')
		<!-- Header End -->
		<!-- Title Bar Start -->
		<div class="title-bar">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="title-bar-text">
							<li class="breadcrumb-item"><a href="/">Home</a></li>							
							<li class="breadcrumb-item"><a href="/blog">Blog</a></li>							
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

		@endsection	