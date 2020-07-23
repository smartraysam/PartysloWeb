@extends('layouts.app')
@section('title', 'Partyslo / Event Details')
@section('content')
	<main class="event-mp">	
			<div class="event-todo-thumbnail-area">
				<div class="todo-thumb event-bg-image event-bg-overlay" style="background-image:url(images/event-view/my-bg.jpg);"></div>
				<div class="event-todo-header">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-12">							
								<div class="my-profile-dt">
									<div class="my-dp-dt">
										<img src="images/event-view/my-dp.jpg" alt="">
									</div>
									<div class="my-text-dt">
										<h3>John Doe</h3>
										<span>Organizer</span>
										<div class="profile-fw-btn">
											<a href="#" class="fw-btn">Follow</a>
										</div>
									</div>
								</div>														
							</div>
							<div class="col-lg-6 col-md-12">		
								<ul class="comment-likes">
									<li>
										<a href="#" class="profile-likes">
											<i class="fas fa-heart"></i>
											Like <ins>251</ins>
										</a>
									</li>
									<li>
										<a href="#" class="profile-likes">
											<i class="fas fa-comment-alt"></i>
											Comment <ins>10</ins>
										</a>
									</li>
									<li>
										<a href="#" class="profile-likes">
											<i class="fas fa-bookmark"></i>
											Bookmark
										</a>
									</li>
									<li>
										<a href="#" class="profile-likes">
											<i class="fas fa-share-alt"></i>
											Share <ins>251</ins>
										</a>
									</li>
									<li class="dropdown">
										<a href="#" class="profile-likes dropdown-toggle-no-caret"  role="button" data-toggle="dropdown">
											<i class="fas fa-ellipsis-v"></i>
										</a>
										<div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
											<a class="post-link-item" href="#">Hide</a>
											<a class="post-link-item" href="#">Copy Link</a>											
											<a class="post-link-item" href="#">Report</a>																									
										</div>
									</li>
								</ul>
							</div>											
						</div>
					</div>
				</div>
			</div>
			<div class="event-dts">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="event-title">
								<h2>Lights Out at the Observatory</h2>								
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<ul class="event-buttons">
								<li>
									<button class="event-btn-1" onclick="window.location.href = '#';">Maybe</button>
								</li>
								<li>
									<button class="event-btn-1" onclick="window.location.href = '#';">450 Seats</button>
								</li>
								<li>
									<button class="event-btn-1" onclick="window.location.href = '#';">Can't Go</button>
								</li>
								<li>
									<button class="event-btn-1" onclick="window.location.href = '#';">Buy Ticket</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="event-sections">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<div class="event-itm1 full-width">
								<div class="event-item-heading">
									<i class="fas fa-bars"></i>
									Description
								</div>
								<div class="event-item-description">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed molestie tellus, quis venenatis eros. Vivamus a bibendum neque, quis malesuada risus. Mauris purus ex, malesuada vitae condimentum laoreet, pellentesque nec purus. Sed sed massa tincidunt, placerat purus in, laoreet justo. Sed tincidunt eros sapien, eget rhoncus leo tempus vel. Quisque elementum purus et rhoncus pharetra. Morbi egestas nibh ut vulputate elementum. Duis aliquet enim sit amet fermentum pharetra. Sed pulvinar non tellus non venenatis. Mauris urna lacus, ornare quis purus vel, tempor placerat leo. Nunc massa nibh, viverra eu nisl vitae, ornare luctus nisi. Nullam at tempus libero. Praesent tincidunt pharetra faucibus. Donec nec fermentum quam.</p>
								</div>
							</div>
							<div class="event-itm1 full-width">
								<div class="event-item-heading">
									<i class="fas fa-user"></i>
									Organizer Team
								</div>
								<div class="event-item-description">									
									<div class="owl-carousel organizer-owl owl-theme">
										<div class="item">
											<div class="ogr-bg">
												<div class="org-img">
													<img src="images/event-view/org-1.jpg" alt="">																										
												</div>
												<a href="user_dashboard_activity.html"><h4>Rock Smith</h4></a>
												<span>Singer</span>
												<div class="organizer-butn">
													<a href="#" class="org-btn">Follow</a>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="ogr-bg">
												<div class="org-img">
													<img src="images/event-view/org-2.jpg" alt="">																										
												</div>
												<a href="user_dashboard_activity.html"><h4>Jassica William</h4></a>
												<span>Musician</span>
												<div class="organizer-butn">
													<a href="#" class="org-btn1">Following</a>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="ogr-bg">
												<div class="org-img">
													<img src="images/event-view/org-3.jpg" alt="">																										
												</div>
												<a href="user_dashboard_activity.html"><h4>Johnson Doe</h4></a>
												<span>Musician</span>
												<div class="organizer-butn">
													<a href="#" class="org-btn">Follow</a>
												</div>
											</div>
										</div>													
									</div>																						
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="event-itm2 full-width">
								<div class="event-city-dt">
									<ul class="city-dt-list">
										<li>
											<div class="it-items">
												<i class="fas fa-map-marker-alt"></i>
												<div class="list-text-dt">
													<span>City</span>
													<ins>Ludhiana</ins>
												</div>
											</div>
										</li>
										<li>
											<div class="it-items">
												<i class="fas fa-calendar-alt"></i>
												<div class="list-text-dt">
													<span>Date</span>
													<ins>23 Dec 2019</ins>
												</div>
											</div>
										</li>
										<li>
											<div class="it-items">
												<i class="fas fa-clock"></i>
												<div class="list-text-dt">
													<span>Time</span>
													<ins>2 PM to 9 PM</ins>
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
							</div>							
							<div class="event-itm4 full-width">
								<div class="event-go-dt border-tb">
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
							</div>
							<div class="event-itm1 full-width">
								<div class="event-item-heading">
									<i class="fas fa-clock"></i>
									Left Time
								</div>
								<div class="event-item-description">
									<ul class="timer-dt">
										<li>
											<div class="it-items"> 												
												<div class="list-text-dt text-center">
													<span id="days">45</span>
													<ins>Days</ins>
												</div>
											</div>
										</li>
										<li>
											<div class="it-items">												
												<div class="list-text-dt text-center">
													<span id="hours">75</span>
													<ins>Hours</ins>
												</div>
											</div>
										</li>
										<li>
											<div class="it-items">												
												<div class="list-text-dt text-center">
													<span id="minutes">32</span>
													<ins>Minutes</ins>
												</div>
											</div>
										</li>
										<li>
											<div class="it-items">												
												<div class="list-text-dt text-center">
													<span id="seconds">52</span>
													<ins>Seconds</ins>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="event-itm1 full-width">
								<div class="event-item-heading">
									<i class="fas fa-map-marker-alt"></i>
									Location
								</div>
								<div class="event-item-description">
									<div id="map"></div>
								</div>
							</div>							
						</div>
						<div class="col-md-12 col-xs-12">
							<div class="event-itm1 full-width">
								<div class="event-item-heading">
									<i class="fas fa-comment-alt"></i>
									Comments
								</div>
								<div class="event-item-description event-cmt-left">
									<div class="event-post-comment">
										<div class="event-post-bg">
											<div class="commntr-dp">
												<img src="images/event-view/user-1.jpg" alt="">
											</div>
											<form>
												<input class="ecomment-post" type="text" placeholder="Write a comment">
												<button class="event-post-btn" type="submit">Post Comment</button>
											</form>
										</div>
									</div>									
									<div class="event-comnt-bg">
										<div class="ecmnt-dt">
											<div class="event-usr-dt">
												<img src="images/event-view/user-2.jpg" alt="">
												<a href="user_dashboard_activity.html"><h4>Rock Smith</h4></a>												
											</div>
											<p>Sed pulvinar non tellus non venenatis. Mauris urna lacus, ornare quis purus vel, tempor placerat leo. Nunc massa nibh, viverra eu nisl vitae, ornare luctus nisi. Vivamus dictum sed felis vel sollicitudin.</p>
										</div>
										<div class="ereply-dt">
											<div class="event-usr-dt2">
												<img src="images/event-view/my-reply-dp.jpg" alt="">
												<a href="#"><h4>John Doe</h4></a>
											</div>
											<p>Thanks</p>
										</div>
										<div class="event-post-reply">
											<div class="reply-dp1">
												<img src="images/event-view/user-1.jpg" alt="">
											</div>
											<form>
												<input class="ereply-post" type="text" placeholder="Write a reply">
												<button class="reply-post-btn" type="submit">Reply</button>
											</form>
										</div>
									</div>
									<div class="event-comnt-bg">
										<div class="ecmnt-dt">
											<div class="event-usr-dt">
												<img src="images/event-view/user-3.jpg" alt="">
												<a href="user_dashboard_activity.html"><h4>Jassica William</h4></a>												
											</div>
											<p>Curabitur ac eros tempus, vestibulum odio non, rhoncus enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus pretium, lorem in convallis tempor, nisi nisl aliquam eros, dapibus imperdiet ante est eget mauris.</p>
										</div>										
										<div class="event-post-reply">
											<div class="reply-dp1">
												<img src="images/event-view/user-1.jpg" alt="">
											</div>
											<form>
												<input class="ereply-post" type="text" placeholder="Write a reply">
												<button class="reply-post-btn" type="submit">Reply</button>
											</form>
										</div>
									</div>									
									<div class="no-more">No More Comments</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
	</main>
@endsection
	
	<script src='https://unpkg.com/es6-promise@4.2.4/dist/es6-promise.auto.min.js'></script>
	<script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
	<script>
		mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FtYm9sIiwiYSI6ImNqdm03bzYydDE2cW00YWwyeHprd3FqamcifQ.HBy4R4sRcXgbgn2OteqFkQ';
		var mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
		mapboxClient.geocoding.forwardGeocode({
		query: 'Ludhiana, India',
		autocomplete: false,
		limit: 1
		})
		.send()
		.then(function (response) {
		if (response && response.body && response.body.features && response.body.features.length) {
		var feature = response.body.features[0];
	 
		var map = new mapboxgl.Map({
		container: 'map',
		style: 'mapbox://styles/mapbox/streets-v11',
		center: [75.8429,30.9042],
		zoom: 10
		});				

		new mapboxgl.Marker()
		.setLngLat(feature.center)
		.addTo(map);
		}
		
		// Add zoom and rotation controls to the map.
		map.addControl(new mapboxgl.NavigationControl());
		});			
		
	</script>