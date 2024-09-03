@extends('layouts.app')
@section('content')
    @if ($pageId == '24' && $slug == 'trainline')
        @include('common/trainline')
    @else
        @include('common/raileasy')
    @endif

    @if (count($dealsData) > 0)
        <section class="blog-section fadeInUp animated">
            <div class="container">
                <h2 class="heading mb-4">{{ $otaData->name }} Discount Codes and Deals for 2024</h2>
                @include('common/deals');
            </div>
            <div class="clear"></div>
        </section>
    @endif


    <section class="section-gray fadeInUp animated">
        <div class="container">
            <h1 class="heading mb-4">{{ $otaData->name }} Tickets, Information, Timetable and Destinations</h1>
            <div class="row">
                <div class="col-md-12 tracking">
                    <a href="https://www.splitsaving.co.uk/" target="_blank">
                        <img width="100%" height="347" src="/assets/images/sttimg/{{ $pageDetail->banner }}"
                            class="vc_single_image-img attachment-full" style="float:left;margin-right:15px;"
                            alt="Split Train Tickets to London">
                    </a>

                    <div class="slide-read-more"> {!! $pageDetail->description !!} </div>
                    <div class="slide-read-more-button read-more-button">Read More</div>
                    <div class="slide-read-more-button">Read Less</div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
    <section class="section-gray fadeInUp animated">
        <div class="container">
            <h3 class="heading mb-4">{{ $otaData->name }} Top Routes</h3>
            <div class="row">
                @foreach ($popData as $routes)
                    <div class="col-md-3 plr-0 flex-none">
                        <div class="column-inner">
                            <div class="column-wrapper">
                                <div class="banner-img">
                                    <img src="/assets/images/sttimg/{{ $routes->route_logo }}"
                                        alt="{{ $routes->route_name }}">
                                </div>
                                <div class="heading2">{{ $routes->route_name }} Split Ticketing</div>
                                <div class="banner-txt"> {!! substr($routes->route_shdesc, 0, 212) !!}</div>
                                <div class="view-box">
                                    <a class="view-btn"
                                        href="{{ url('split-train-ticket/' . $routes->route_slug . '.html') }}"
                                        title="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="clear"></div>
    </section>
    <section class="section-gray fadeInUp animated">
        <div class="container">
            <h3 class="heading mb-4">How to Get Trainline Tickets?</h3>
            <div class="row">
                <div class="col-md-3 plr-0 flex-none">
                    <div class="column-inner">
                        <div class="column-wrapper">
                            <div class="heading2">Book in Advance</div>
                            <p class="text-justify mrnew">Book your ticket at one of our coach stations, or even direct from
                                the coach driver on the day of travel. You don’t have to pay a booking fee when you purchase
                                a ticket from a driver.Book the best ticket prices for your journey today in advance & if
                                you know where you are going then book bus,coaches ,fleets, in advance and helps you to save
                                money.Find out more about advance ticket alert.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 plr-0 flex-none">
                    <div class="column-inner">
                        <div class="column-wrapper">
                            <div class="heading2">Travel Off-Peak</div>
                            <p class="text-justify mrnew">Are you travelling after the morning rush hour? Save money on your
                                journey when you buy a Off Peak ticket. Off-Peak bus times can vary depending on the time of
                                day, the day of the week and the train company you’re travelling with. Buy Off peak tickets
                                online if you are taking a trip into the city or outside the countryside, the ticket gives
                                you the chance to enjoy quieter bus journey at lower prices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 plr-0 flex-none">
                    <div class="column-inner">
                        <div class="column-wrapper">
                            <div class="heading2">Price Prediction</div>
                            <p class="text-justify mrnew">Price prediction will help you save money by letting you know when
                                it is the best and cheapest time to book advance bus tickets. With price prediction, we are
                                increasing transparency around ticket costs by giving you access to all the information and
                                get the best price for your journey. Price Prediction only works with Advance tickets for
                                your travel.Discover the magic of price prediction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 plr-0 flex-none">
                    <div class="column-inner">
                        <div class="column-wrapper">
                            <div class="heading2">Season Tickets</div>
                            <p class="text-justify mrnew">Do you commute regularly by bus/coaches? Then why not save money
                                with a bus season ticket? Season tickets will save your time and hassle free of buying
                                tickets daily.There are different types of season tickets for you to choose from and allow
                                unlimited travel in both directions between the stations specified. Check out season ticket
                                today to gets started.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
    <section class="popular-bg2 fadeInUp animated">
        <div class="container">
            <div class="row">
                <div class="heading mb-4">{{ $otaData->name }} Seating - First Class and Standard</div>
                <div class="col-sm-4">
                    <img src="/assets/images/sttimg/{{ $pageDetail->banner }}" class="megaBusimg" alt="MegaBus Tickets">
                </div>
                <div class="col-sm-4">
                    {!! $pageDetail->merchant_details !!}
                    {!! $pageDetail->search_right !!}
                </div>
                <div class="col-sm-4">
                    {!! $pageDetail->rightbanner_code !!}
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
    @include('common/reviewform')
@endsection
