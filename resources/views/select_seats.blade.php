@extends('layouts.app')
@section('title', 'Partyslo / Book Event')
@section('content')

<!-- Title Bar Start -->
<div class="title-bar">			
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="title-bar-text">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/event">Event Detail View</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Select Seats</li>
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
                <div class="col-lg-8 col-md-8">
                    <div class="evnt-heading">
                        <h2>Lights Out at the Observatory</h2>
                        <span>Wed, 23 Dec, 2019 2:00 PM - 9:00 PM IST</span>
                    </div>
                    <div class="evnt-img">
                        <img src="images/event-view/big-img.jpg" alt="">
                    </div>
                    <div class="select-seats">
                        <div class="vip-seats">
                            <div class="text-seats-left">
                                <h4>Book VIP Seats</h4>
                                <span>Sales end on 23 Dec, 2019, 12.00 PM</span>
                                <div class="evnt-price">$210</div>
                            </div>
                            <div class="select-sts-right">
                                <div class="select-wdth">
                                    <div class="select-bg">									
                                        <select class="wide" style="display: none;">
                                            <option>1</option>	
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>																					
                                            <option>10</option>																					
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vip-seats">
                            <div class="text-seats-left">
                                <h4>Book General Seats</h4>
                                <span>Sales end on 23 Dec, 2019, 12.00 PM</span>
                                <div class="evnt-price">$50</div>
                            </div>
                            <div class="select-sts-right">
                                <div class="select-wdth">
                                    <div class="select-bg">									
                                        <select class="wide" style="display: none;">
                                            <option>1</option>	
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>																					
                                            <option>10</option>																					
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faqs-select-seats">
                        <div class="faqs-seats-heading">
                            <h2> Select Seats Faqs</h2>
                        </div>
                        <div class="sfaqs-1">
                            <h6>What is VIP tickets?</h6>									
                            <p>Maecenas ornare sollicitudin velit, sed iaculis neque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras gravida purus non lacus fermentum volutpat. Aenean pretium bibendum convallis.</p>
                        </div>
                        <div class="sfaqs-1">
                            <h6>What is general tickets?</h6>									
                            <p>Maecenas ornare sollicitudin velit, sed iaculis neque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras gravida purus non lacus fermentum volutpat. Aenean pretium bibendum convallis.</p>
                        </div>
                        <div class="sfaqs-1">
                            <h6>Can I book a seats?</h6>									
                            <p>Maecenas ornare sollicitudin velit, sed iaculis neque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras gravida purus non lacus fermentum volutpat. Aenean pretium bibendum convallis.</p>
                        </div>
                        <div class="sfaqs-1">
                            <h6>What is the maximum number of seats that I can book?</h6>									
                            <p>Maecenas ornare sollicitudin velit, sed iaculis neque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras gravida purus non lacus fermentum volutpat. Aenean pretium bibendum convallis.</p>
                        </div>
                        <div class="sfaqs-1">
                            <h6>How much time does it take to confirm my booking?</h6>									
                            <p>Maecenas ornare sollicitudin velit, sed iaculis neque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras gravida purus non lacus fermentum volutpat. Aenean pretium bibendum convallis.</p>
                        </div>
                        <div class="sfaqs-1">
                            <h6>Is it possible to book tickets for another person through my account?</h6>									
                            <p>Maecenas ornare sollicitudin velit, sed iaculis neque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras gravida purus non lacus fermentum volutpat. Aenean pretium bibendum convallis.</p>
                        </div>
                    </div>							
                </div>
                <div class="col-lg-4 col-md-4">	
                    <div class="order-summary">
                        <h2>Order Summary</h2>
                        <ul class="summary-dts">
                            <li>
                                <div class="summary-left">
                                    <div class="select-ticket-dt">
                                        <span>1</span> x Vip Tickets
                                    </div>
                                </div>
                                <div class="summary-right">
                                    <div class="tickt-price">
                                        $210
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="summary-left">
                                    <div class="select-ticket-dt">
                                        <span>1</span> x General Tickets
                                    </div>
                                </div>
                                <div class="summary-right">
                                    <div class="tickt-price">
                                        $0
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="summary-left">
                                    <div class="select-ticket-dt" style="color:#313131; font-weight:500;">
                                        Total
                                    </div>
                                </div>
                                <div class="summary-right">
                                    <div class="tickt-price">
                                        $210
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="purchase-link">
                            <button class="purchase-btn" onclick="window.location.href = '/checkout';">Purchase Now</button>
                        </div>
                    </div>
                </div>						
            </div>					
        </div>
    </div>
</main>
<!-- Body End -->			
<!-- Footer Start -->
@endsection