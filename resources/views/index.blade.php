@extends('layouts.app')
@section('title', 'Partyslo / Home')
@section('content')
    <main>
        <div class="main-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        @include('theme.leftSidebar')
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="center-section">
                            @include('theme.searchbar')
                            <div class="main-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a href="#tab-upcoming" class="nav-link active" id="upcoming"
                                            data-toggle="tab">Upcoming</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-trending" class="nav-link" id="trending"
                                            data-toggle="tab">Trending</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-this-week" class="nav-link" id="thisweek" data-toggle="tab">This
                                            Week</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-upcoming">
                                        <div class="main-posts">
                                            <div id="event_content">
                                                @include('theme.event_upcoming')
                                            </div>
                                            <div class="main-loader">
                                                <div class="spinner">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-trending">
                                        <div class="main-posts">
                                            <div id="event_content">
                                                @include('theme.event_trending')
                                            </div>


                                            <div class="main-loader">
                                                <div class="spinner">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-this-week">
                                        <div class="main-posts">

                                            <div id="event_content">
                                                @include('theme.event_thisweek')
                                            </div>
                                            <div class="main-loader">
                                                <div class="spinner">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        @include('theme.rightSidebar')
                    </div>
                </div>
            </div>
        </div>
    </main>
@section('scripts')
    @parent
    <script type='text/javascript' src="{{ asset('js/jquery.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/bootstrap3-typeahead.min.js') }}"></script>
    <script type="text/javascript">
        $("input.typeahead").typeahead({
            source: function(query, process) {
                return $.get(
                    "/categorysearch", {
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
    <script>
        var event_type = "upcoming";
        var event_cat, event_city, event_date;
        $("#upcoming").click(function() {
            console.log('upcoming');
            event_type = "upcoming";
        });
        $("#trending").click(function() {
            console.log('trending');
            event_type = "trending";
        });
        $("#thisweek").click(function() {
            event_type = "thisweek";
            console.log('this week');
        });
        var SITEURL = "{{ url('/') }}";
        var path = "events";
        var page = 1; //track user scroll as page number, right now page number is 1
        //  load_more(page); //initial content load
        $(window).scroll(function() { //detect page scroll
            if ($(window).scrollTop() + $(window).height() >= $(document)
                .height()) { //if user scrolled from top to bottom of the page
                page++; //page number increment
                load_more(page, path); //load content   
            }
        });

        $("#search").click(function() {
            page = 1;
            path = "filterevents";
            $("#event_content").empty();
            load_more(page, path);
        });

        function load_more(page, path) {
            $.ajax({
                    url: SITEURL + "/" + path + "?page=" + page,
                    type: "get",
                    data: {
                        type: event_type,
                        category: event_cat,
                        city: event_city,
                        date: event_date
                    },
                    datatype: "json",
                    beforeSend: function() {
                        $('.main-loader').show();
                    }
                })
                .done(function(data) {
                    console.log(data);
                    if (data.length == 0) {
                        console.log(data.length);
                        //notify user if nothing to load
                        $('.main-loader').html("No more records!");
                        return;
                    }
                    $('.main-loader').hide(); //hide loading animation once data is received
                    $("#event_content").append(data); //append data into #results element          
                    //console.log(data.length);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    alert('No response from server');
                })

        }

    </script>
@stop
@endsection
