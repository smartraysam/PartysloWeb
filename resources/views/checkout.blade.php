@extends('layouts.app')
@section('title', 'Partyslo / Checkout')
@section('content')
		<div class="title-bar">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="title-bar-text">
							<li class="breadcrumb-item"><a href="/">Home</a></li>
							<li class="breadcrumb-item"><a href="/event_detail_view">Event Detail View</a></li>
							<li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="checkout-heading">
								<h2>Checkout</h2>								
							</div>
							<div class="table-responsive table-brder">
								<table class="table">
									<thead>
										<tr>
											<th scope="col" style="font-size:16px; font-weight:500;">Event</th>
											<th scope="col" style="font-size:16px; font-weight:500;">Tickets Qty</th>
											<th scope="col" style="font-size:16px; font-weight:500;">Category</th>
											<th scope="col" style="font-size:16px; font-weight:500;">Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">
												<div class="checkout-dt">
													<div class="check-img">
														<img src="images/event-view/checkout-img.jpg" alt="">
													</div>
													<div class="evnt-dt-ckot">
														<div class="chk-heading">Event Title Goes Here</div>
														<div class="ctgory">Club</div>
														<div class="date-tme">Friday, 23 Dec 2018 | 2.00 PM to 9.00 PM</div>
														<div class="lctn-dt"><i class="fas fa-map-marker-alt"></i> India</div>
													</div>
												</div>
											</th>
											<td>1</td>
											<td>VIP</td>
											<td>$210</td>
										</tr>
																				
									</tbody>
								</table>
							</div>
							<div class="checkout-tabs">
								<ul class="nav nav-tabs" id="myTab" role="tablist">									
									<li class="nav-item">
										<a href="#tab-cards" class="nav-link active" data-toggle="tab">
											<img src="images/event-view/cards.png" alt="">
										</a>
									</li>
									<li class="nav-item">
										<a href="#tab-paypal" class="nav-link" data-toggle="tab">
											<img src="images/event-view/paypal.png" alt="">
										</a>
									</li>																		
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tab-cards">
										<div class="payment-method-form">
											<div class="container">
												<div class="row justify-content-md-center">
													<div class="col-lg-6 col-md-8">
														<div class="all-inputs">
															<form>
																<div class="row">															
																	<div class="col-md-12">
																		<div class="form-group">
																			<label>Card Number*</label>
																			<input class="payment-input" type="text" placeholder="Card number">
																		</div>																	
																	</div>
																	<div class="col-md-12">
																		<div class="form-group">
																			<label>Holder Name*</label>
																			<input class="payment-input" type="text" placeholder="Holder name">
																		</div>	
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label>Expiry Date*</label>
																			<input class="payment-input datepicker-here" type="text" data-language='en' data-min-view="months" data-view="months" data-date-format="MM yyyy" placeholder="Expiry Date">
																		</div>	
																	</div>																
																	<div class="col-md-6">
																		<div class="form-group">
																			<label>Cvv / Cvc*</label>
																			<input class="payment-input" type="text" placeholder="Ccv">
																		</div>	
																	</div>
																	<div class="col-md-12">
																		<div class="form-group">
																			<label>Promo Code*</label>
																			<input class="payment-input" type="text" placeholder="Enter Promo Code">
																		</div>	
																	</div>
																	<div class="col-md-12">
																		<button class="confirm-odr-btn" type="submit">Confirm Order</button>
																	</div>															
																</div>
															</form>															
														</div>															
													</div>													
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-paypal">
										<div class="payment-method-form">
											<div class="container">
												<div class="row justify-content-md-center">
													<div class="col-lg-6 col-md-8">
														<div class="all-inputs">
															<p>You have chosen PayPal as a payment option. Please click the "Place Your Order" button in the order summary to be directed to PayPal and complete the checkout process.</p>														
															<button class="confirm-odr-btn" type="submit">Confirm Order Via Paypal</button>
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
				</div>
			</div>
		</main>
		<!-- Body End -->			
@endsection