@extends('layouts.app')
@section('title', 'Partyslo / Contact Us')
@section('content')
		<!-- Title Bar Start -->
		<div class="title-bar">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="title-bar-text">
							<li class="breadcrumb-item"><a href="/">Home</a></li>							
							<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
						</ol>
					</div>		
				</div>		
			</div>		
		</div>		
		<!-- Title Bar End -->
		<!-- Body Start -->	
		<main class="contact-mp">	
			<div class="main-section">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-lg-6 col-md-8">							
							<div class="contact-heading text-center">
								<h2>Get In Touch With Our Team of Experts</h2>
								<p>Do you have any question? Our experts will be happy to help.</p>
							</div>
							<div class="contact-form">
									<form>
									<div class="form-group">									
										<input class="title-discussion-input" type="text" placeholder="Name">
									</div>
									<div class="form-group">									
										<input class="title-discussion-input" type="email" placeholder="Email Address">
									</div>
									<div class="form-group">									
										<input class="title-discussion-input" type="text" placeholder="Company">
									</div>
									<div class="form-group">									
										<input class="title-discussion-input" type="text" placeholder="Subject">
									</div>
									<div class="form-group">																		
										<textarea class="replt-comnt" placeholder="What are you looking for?"></textarea>									
									</div>
									<button class="send-m-btn" type="submit">Send Message</button>
								</form>
							</div>
						</div>						
					</div>					
				</div>
			</div>
		</main>
@endsection
