@extends('layouts.app')
@section('title', 'Partyslo / Add Event')
@section('content')
<div class="title-bar">			
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="title-bar-text">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>							
                    <li class="breadcrumb-item active" aria-current="page">Add New Event</li>
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
                <div class="col-lg-8 col-md-8">
                    <div class="checkout-heading text-center">
                        <h2>Add New Event</h2>								
                    </div>
                    <div class="add-event-bg">
                        <form>
                            <div class="input-section-item">
                                <div class="add-input-title">								
                                    <i class="fas fa-pencil-alt"></i>
                                    <h6>Title*</h6>
                                </div>
                                <div class="add-input-items">
                                    <input class="add-inputs" type="text" placeholder="Event Title Here">
                                </div>
                            </div>
                            <div class="input-section-item">
                                <div class="add-input-title">								
                                    <i class="fas fa-pencil-alt"></i>
                                    <h6>Description*</h6>
                                </div>
                                <div class="add-input-items">
                                    <textarea class="add-event-des" placeholder="Description here"></textarea>
                                </div>
                            </div>
                            <div class="input-section-item">
                                <div class="add-input-title">								
                                    <i class="fas fa-ticket-alt"></i>
                                    <h6>Ticket Price*</h6>
                                </div>
                                <div class="add-input-items">
                                    <input class="add-inputs" type="text" placeholder="Enter Ticket Price">
                                </div>
                            </div>
                            <div class="input-section-item">
                                <div class="add-input-title">								
                                    <i class="fas fa-info-circle"></i>
                                    <h6>Event Details*</h6>
                                </div>
                                <div class="add-input-items">
                                    <div class="add-evnt-dt">											
                                        <div class="row">											
                                            <div class="col">											
                                                <div class="select-bg mt-20">									
                                                    <select class="wide" style="display: none;">
                                                        <option>Event Category</option>	
                                                        <option>Music</option>																																
                                                        <option>Festival</option>																																
                                                        <option>Theater</option>																																
                                                        <option>Club</option>																																																																																																																																																																				
                                                        <option>Comedy</option>																																																																																																																																																																				
                                                        <option>Sports</option>																																																																																																																																																																				
                                                        <option>Art</option>																																																																																																																																																																				
                                                        <option>Promotions</option>																																																																																																																																																																																																																																																																																																																																					
                                                        <option>Others</option>																																																																																																																																																																																																																																																																																																																																																					
                                                    </select>
                                                </div>																					
                                            </div>
                                          
                                        </div>
                                    </div>										
                                    <div class="add-evnt-dt">										
                                        <input class="add-inputs" type="text" placeholder="Search City">
                                        <i class="fas fa-search ev-icon"></i>
                                    </div>
                                     
                                    
                                    <div class="add-evnt-dt">										
                                        <input class="add-date-input datepicker-here" data-language="en" type="text" placeholder="Select Date">
                                        <i class="fas fa-calendar-alt dte-icon"></i>
                                    </div>
                                    <div class="add-evnt-dt">											
                                        <div class="row">											
                                            <div class="col-md-6">											
                                                <div class="select-bg mt-20">									
                                                    <select class="wide" style="display: none;">
                                                        <option>Start Time</option>	
                                                        <option>12.00 AM</option>																																
                                                        <option>12.30 AM</option>																																
                                                        <option>01.00 AM</option>																																
                                                        <option>01.30 AM</option>																																
                                                        <option>02.00 AM</option>																																
                                                        <option>02.30 AM</option>																																
                                                        <option>03.00 AM</option>																																
                                                        <option>03.30 AM</option>																																
                                                        <option>04.00 AM</option>																																
                                                        <option>04.30 AM</option>																																
                                                        <option>05.00 AM</option>																																
                                                        <option>05.30 AM</option>																																
                                                        <option>06.00 AM</option>																																
                                                        <option>06.30 AM</option>																																
                                                        <option>07.00 AM</option>																																
                                                        <option>07.30 AM</option>																																
                                                        <option>08.00 AM</option>																																
                                                        <option>08.30 AM</option>																																
                                                        <option>09.00 AM</option>																																
                                                        <option>09.30 AM</option>																																
                                                        <option>10.00 AM</option>																																
                                                        <option>10.30 AM</option>																																
                                                        <option>11.00 AM</option>																																
                                                        <option>11.30 AM</option>																																
                                                        <option>12.00 PM</option>																																
                                                        <option>12.30 PM</option>																																
                                                        <option>01.00 PM</option>																																
                                                        <option>01.30 PM</option>																																
                                                        <option>02.00 PM</option>																																
                                                        <option>02.30 PM</option>																																
                                                        <option>03.00 PM</option>																																
                                                        <option>03.30 PM</option>																																
                                                        <option>04.00 PM</option>																																
                                                        <option>04.30 PM</option>																																
                                                        <option>05.00 PM</option>																																
                                                        <option>05.30 PM</option>																																
                                                        <option>06.00 PM</option>																																
                                                        <option>07.00 PM</option>																																
                                                        <option>07.30 PM</option>																																
                                                        <option>08.00 PM</option>																																
                                                        <option>08.30 PM</option>																																
                                                        <option>09.00 PM</option>																																
                                                        <option>09.30 PM</option>																																
                                                        <option>10.00 PM</option>																																
                                                        <option>10.30 PM</option>																																
                                                        <option>11.00 PM</option>																																
                                                        <option>11.30 PM</option>																																																																																																																							
                                                    </select>
                                                </div>																					
                                            </div>
                                            <div class="col-md-6">											
                                                <div class="select-bg mt-20">									
                                                    <select class="wide" style="display: none;">
                                                        <option>End Time</option>	
                                                        <option>12.00 AM</option>																																
                                                        <option>12.30 AM</option>																																
                                                        <option>01.00 AM</option>																																
                                                        <option>01.30 AM</option>																																
                                                        <option>02.00 AM</option>																																
                                                        <option>02.30 AM</option>																																
                                                        <option>03.00 AM</option>																																
                                                        <option>03.30 AM</option>																																
                                                        <option>04.00 AM</option>																																
                                                        <option>04.30 AM</option>																																
                                                        <option>05.00 AM</option>																																
                                                        <option>05.30 AM</option>																																
                                                        <option>06.00 AM</option>																																
                                                        <option>06.30 AM</option>																																
                                                        <option>07.00 AM</option>																																
                                                        <option>07.30 AM</option>																																
                                                        <option>08.00 AM</option>																																
                                                        <option>08.30 AM</option>																																
                                                        <option>09.00 AM</option>																																
                                                        <option>09.30 AM</option>																																
                                                        <option>10.00 AM</option>																																
                                                        <option>10.30 AM</option>																																
                                                        <option>11.00 AM</option>																																
                                                        <option>11.30 AM</option>																																
                                                        <option>12.00 PM</option>																																
                                                        <option>12.30 PM</option>																																
                                                        <option>01.00 PM</option>																																
                                                        <option>01.30 PM</option>																																
                                                        <option>02.00 PM</option>																																
                                                        <option>02.30 PM</option>																																
                                                        <option>03.00 PM</option>																																
                                                        <option>03.30 PM</option>																																
                                                        <option>04.00 PM</option>																																
                                                        <option>04.30 PM</option>																																
                                                        <option>05.00 PM</option>																																
                                                        <option>05.30 PM</option>																																
                                                        <option>06.00 PM</option>																																
                                                        <option>07.00 PM</option>																																
                                                        <option>07.30 PM</option>																																
                                                        <option>08.00 PM</option>																																
                                                        <option>08.30 PM</option>																																
                                                        <option>09.00 PM</option>																																
                                                        <option>09.30 PM</option>																																
                                                        <option>10.00 PM</option>																																
                                                        <option>10.30 PM</option>																																
                                                        <option>11.00 PM</option>																																
                                                        <option>11.30 PM</option>																																																																																																																							
                                                    </select>
                                                </div>																							
                                            </div>
                                        </div>
                                    </div>
                                </div>									
                            </div>
                            <div class="input-section-item">
                                <div class="add-input-title">								
                                    <i class="fas fa-check-square"></i>
                                    <h6>Event Venue and Seats*</h6>
                                </div>
                                <div class="add-input-items">																			
                                    <div class="add-evnt-dt">											
                                        <div class="row">											
                                            <div class="col-md-6">											
                                                <div class="select-bg mt-20">									
                                                    <select class="wide" style="display: none;">
                                                        <option>Venue Type</option>	
                                                        <option>Arena</option>																																
                                                        <option>Stadium</option>																																
                                                        <option>Theater</option>																																
                                                        <option>Performing Arts Facility</option>																																																																																																																																																																				
                                                        <option>Convention / Exhibition Center</option>																																																																																																																																																																				
                                                        <option>Conference Center</option>																																																																																																																																																																				
                                                        <option>Multi-Purpose Venue</option>																																																																																																																																																																				
                                                        <option>Club / Concert Venue</option>																																																																																																																																																																				
                                                        <option>Non-Venue</option>																																																																																																																																																																				
                                                        <option>Other</option>																																																																																																																																																																																																																																																																																																																																																					
                                                    </select>
                                                </div>																					
                                            </div>
                                            <div class="col-md-6">											
                                                <div class="select-bg mt-20">									
                                                    <select class="wide" style="display: none;">
                                                        <option>Select Total Seats</option>	
                                                        <option>50</option>																																
                                                        <option>100</option>																																
                                                        <option>150</option>																																																																																																																																																																				
                                                        <option>200</option>																																																																																																																																																																				
                                                        <option>250</option>																																																																																																																																																																				
                                                        <option>300</option>																																																																																																																																																																				
                                                        <option>350</option>																																																																																																																																																																				
                                                        <option>400</option>																																																																																																																																																																				
                                                        <option>450</option>																																																																																																																																																																				
                                                        <option>500</option>																																																																																																																																																																				
                                                        <option>550</option>																																																																																																																																																																				
                                                        <option>600</option>																																																																																																																																																																				
                                                        <option>650</option>																																																																																																																																																																				
                                                        <option>700</option>																																																																																																																																																																				
                                                        <option>750</option>																																																																																																																																																																				
                                                        <option>800</option>																																																																																																																																																																				
                                                        <option>850</option>																																																																																																																																																																				
                                                        <option>900</option>																																																																																																																																																																				
                                                        <option>950</option>																																																																																																																																																																				
                                                        <option>1000</option>																																																																																																																																																																				
                                                        <option>1050</option>																																																																																																																																																																				
                                                    </select>
                                                </div>																							
                                            </div>
                                        </div>
                                    </div>
                                </div>									
                            </div>
                            <div class="input-section-item">
                                <div class="add-input-title">								
                                    <i class="fas fa-check-square"></i>
                                    <h6>Featuring DJ*</h6>
                                </div>
                                <div class="add-input-items">										
                                    <div class="add-evnt-dt">										
                                        <input class="add-inputs" type="text" placeholder="Search DJ">
                                        <i class="fas fa-search ev-icon"></i>
                                    </div>
                                  
                                </div>
                             									
                            </div>
                            <div class="input-section-item">
                                <div class="add-input-title">								
                                    <i class="fas fa-image"></i>
                                    <h6>Image*</h6>
                                </div>
                                <div class="add-input-items">																			
                                    <div class="add-evnt-dt">											
                                        <div class="event-add-img1">											
                                            <img src="images/add-img.jpg" alt="">
                                        </div>
                                        <div class="addpic" id="OpenImgUpload">
                                            <input type="file" id="file">
                                            <label for="file">Choose File</label>
                                            <p>Maximum file size : 1 MB</p>
                                        </div>
                                    </div>
                                </div>									
                            </div>
                            <div class="input-section-item">
                                <div class="add-input-title">								
                                    <i class="fas fa-user"></i>
                                    <h6>Organizer Team*</h6>
                                </div>
                                <div class="add-input-items">
                                    <input class="add-inputs" type="Search" placeholder="Search People">
                                </div>
                            </div>
                            <div class="upload-mp">
                                <button class="upload-btn" type="submit">Upload Event</button>
                            </div>
                        </form>
                    </div>															
                </div>											
            </div>					
        </div>
    </div>
</main>
@endsection
