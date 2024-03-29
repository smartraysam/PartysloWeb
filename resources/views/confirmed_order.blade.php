@extends('layouts.app')
@section('title', 'Partyslo / Order Confirm')
@section('content')
		<div class="title-bar">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="title-bar-text">
							<li class="breadcrumb-item"><a href="/">Home</a></li>							
							<li class="breadcrumb-item active" aria-current="page">Order Confirmed</li>
						</ol>
					</div>		
				</div>		
			</div>		
		</div>		
		<!-- Title Bar End -->
		<!-- Body Start -->	
		<main class="discussion-mp">	
			<div class="main-section">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-lg-6 col-md-8">
							<div class="checkout-heading text-center">
								<h2>Order Confirmed</h2>								
							</div>
							<div class="confirm-order">
								<div class="checkout-dt1">
									<div class="check-img">
										<img src="images/event-view/checkout-img.jpg" alt="">
									</div>
									<div class="evnt-dt-ckot1">
										<h4>Event Title Goes Here</h4>
										<div class="ctgory1">Club</div>
										<div class="date-tme1">Friday, 23 Dec 2018 | 2.00 PM to 9.00 PM</div>
										<div class="lctn-dt1"><i class="fas fa-map-marker-alt"></i> India</div>
									</div>									
								</div>
								<div class="confirm-tickets">
									<div class="vip-left1">Booked Tickets :</div>
									<div class="vip-left">0 VIP</div>
									<div class="css-dot">,</div>
									<div class="general-left">0 General</div>
								</div>
								<div class="congrats">
									<h4>Congratulations!!!</h4>
									<span>Your ticket has been booked.</span>
									<p>Scan OR Code at the event place.</p>
									<img src="images/event-view/qr.svg" alt="">
									<p class="sms">Ticket details are sent to you in sms & email. Thanks!</p>
								</div>															
							</div>															
						</div>											
					</div>					
				</div>
			</div>
		</main>
@endsection