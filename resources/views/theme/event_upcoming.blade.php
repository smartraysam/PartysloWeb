@foreach($eventsupcoming as $event)
<div class="event-main-post">
	<div class="event-top">
		<div class="event-top-left">
			<a href="/event">
				<h4>Event Title Here</h4>
			</a>
		</div>
		<div class="event-top-right">
			<div class="ticket-price">Ticket Price : <span>$15</span></div>
			<div class="post-dt-dropdown dropdown">
				<span class="dropdown-toggle-no-caret" role="button"
					data-toggle="collapse" data-target="#eventDropdown"><i
						class="fas fa-ellipsis-v"></i></span>
				<div class="dropdown-menu post-rt-dropdown dropdown-menu-right"
					id="eventDropdown">
					<a class="post-link-item" href="#">Hide</a>
					<a class="post-link-item" href="/event">Details</a>
					<a class="post-link-item" href="/user">User Profile</a>
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
						<li><button class="main-btn-link"
								onclick="window.location.href = '/buyticket';">Buy
								Ticket</button></li>
						<li><button class="main-btn-link btn-hide"
								onclick="window.location.href = '#';">May
								Be</button></li>
					</ul>
				</div>
				<div class="right-buttons">
					<ul class="main-btns">
						<li><button class="main-btn-link btn-hide"
								onclick="window.location.href = '#';">450
								Seats</button></li>
						<li><button class="main-btn-link btn-hide"
								onclick="window.location.href = '#';">Can't
								Go</button></li>
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
					<i class="fas fa-question-circle"
						style="color:#a7a8aa;"></i>
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
@endforeach
