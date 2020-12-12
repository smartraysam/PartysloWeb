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
        @if (session('status'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong style="text-decoration: white;">{{ session('status') }}</strong>
            </div>
        @endif
        <div class="main-section">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="checkout-heading text-center">
                            <h2>Add New Event</h2>
                        </div>
                        <div class="add-event-bg">
                            <form method="post" action="/save_event" enctype="multipart/form-data" autocomplete="off"
                                id="create-event">
                                @csrf

                                <div class="input-section-item">
                                    <div class="add-input-title">
                                        <i class="fas fa-pencil-alt"></i>
                                        <h6>Title*</h6>
                                    </div>
                                    <div class="add-input-items">
                                        <input class="add-inputs" type="text" name="title" placeholder="Event Title Here">
                                    </div>
                                </div>
                                <div class="input-section-item">
                                    <div class="add-input-title">
                                        <i class="fas fa-pencil-alt"></i>
                                        <h6>Description*</h6>
                                    </div>
                                    <div class="add-input-items">
                                        <textarea class="add-event-des" placeholder="Description here"
                                            name="description"></textarea>
                                    </div>
                                </div>
                                <div class="input-section-item">
                                    <div class="add-input-title">
                                        <i class="fas fa-ticket-alt"></i>
                                        <h6>Ticket Price*</h6>
                                    </div>
                                    <div class="add-input-items">
                                        <input class="add-inputs" type="text" name="ticket"
                                            placeholder="Enter Ticket Price">
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
                                                        <select class="wide" style="display: none;" name="category">
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
                                            <div class="row">
                                                <div class="col-md-6"> <input class="add-date-input datepicker-here"
                                                        id="start_date" data-language="en" type="text"
                                                        placeholder="Select Start Date" name="startdate">
                                                    <i class="fas fa-calendar-alt dte-icon" style="padding-right: 10px"></i>
                                                </div>
                                                <div class="col-md-6"> <input class="add-date-input datepicker-here"
                                                        id="end_date" data-language="en" type="text"
                                                        placeholder="Select End Date" name="endstart">
                                                    <i class="fas fa-calendar-alt dte-icon" style="padding-right: 10px"></i>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="add-evnt-dt">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="select-bg mt-20">
                                                        <select class="wide" style="display: none;" name="starttime">
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
                                                        <select class="wide" style="display: none;" name="endtime">
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
                                        <h6>Event Venue*</h6>
                                    </div>
                                    <div class="add-input-items">
                                        <input class="add-inputs" type="text" name="venue" placeholder="Event Venue">
                                    </div>
                                    <div class="add-input-items">
                                        <div class="add-evnt-dt">
                                            <input class="add-inputs  map-input" type="text" placeholder="Search City"
                                                id="address-input" name="address" autocomplete="off">
                                            <i class="fas fa-search ev-icon"></i>
                                            <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                                            <input type="hidden" name="address_longitude" id="address-longitude"
                                                value="0" />
                                        </div>
                                    </div>
                                    <div class="add-input-items" id="address-map-container"
                                        style="width:100%;height:400px; ">
                                        <div style="width: 100%; height: 100%" id="address-map"></div>
                                    </div>

                                </div>
                                <div class="input-section-item">
                                    <div class="add-input-title">
                                        <i class="fas fa-check-square"></i>
                                        <h6>Featuring DJ*</h6>
                                    </div>
                                    <div class="add-input-items">
                                        <div class="add-evnt-dt">
                                            <input class="typeahead add-inputs" type="text" placeholder="Search DJ"
                                                name="dj" autocomplete="off">
                                            <i class="fas fa-search ev-icon"></i>
                                        </div>

                                    </div>

                                </div>
                                <div class="input-section-item">
                                    <div class="add-input-title">
                                        <i class="fas fa-image"></i>
                                        <h6>Event Image(s)*</h6>
                                    </div>
                                    <div class="add-input-items">
                                        <div class="add-evnt-dt">
                                            {{-- <form method="POST" name="event_imgs"
                                                id="event_imgs" enctype="multipart/form-data">
                                                --}}
                                                <div class="input-field">
                                                    <div class="input-images-1" tyle="padding-top: .5rem;">
                                                    </div>
                                                </div>
                                                {{-- <button class="btn btn-success"
                                                    style="margin-top:10px">Upload Images</button>
                                                --}}
                                                {{--
                                            </form> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="input-section-item">
                                    <div class="add-input-title" style="margin-bottom: 20px">
                                        <i class="fas fa-user"></i>
                                        <h6>Organizer Team* </h6>
                                    </div>
                                    <div class="add-input-items">
                                        <input class="add-inputs" type="Search" name="organizers" data-role="tagsinput">
                                        <span>
                                            <p>Seperate entries with comma</p>
                                        </span>
                                        <input class="add-inputs" type="text" name="organizerslink"
                                            placeholder="Organizer web page">
                                    </div>
                                </div>
                                <div class="upload-mp">
                                    <button class="upload-btn" type="submit">Add Event</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@section('scripts')
    @parent
    <script type='text/javascript' src="{{ asset('js/jquery.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('vendor/bootstrap-tagsinput/tagsinput.js') }}"></script>

    <script type="text/javascript" src="{{ asset('vendor/imageuploader/image-uploader.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap3-typeahead.min.js') }}"></script>
    <script
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDHpSFafpkDUWTgk0tWXZXqTAISMOHoCEs&libraries=places&callback=initialize"
        async defer></script>
    <script type='text/javascript' src="{{ asset('js/mapInput.js') }}"></script>

    <script type="text/javascript">
        $('.input-images-1').imageUploader({
            imagesInputName: 'event_image',
            maxSize: 2 * 1024 * 1024,
            maxFiles: 10
        });
        $("input.typeahead").typeahead({
            source: function(query, process) {
                return $.get(
                    "/autocomplete", {
                        query: query
                    },
                    function(data) {
                        return process(data);
                    }
                );
            },
            updater: function(item) {
                return item;
            }
        });

    </script>

@stop
@endsection
