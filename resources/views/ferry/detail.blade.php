@extends('layouts.app')
@section('content')
    <section class="section-gray herobanner fadeInUp animated" style="padding-bottom: 0px !important">
            {{-- <h1 class="heading mb-4">{{ $ferryData->name }} Tickets, Information, Timetable and Destinations</h1> --}}
            <div class="row">
                <div class="col-md-12 tracking">
                    <a href="https://poferries.jyae.net/c/3882848/170847/3038?subId1=CTT&subId2=1230" target="_blank">
                        <img width="100%" height="auto" src="/assets/images/sttimg/{{ $pageDetail->herobanner }}"
                            class="vc_single_image-img attachment-full desktop-img"
                            alt="{{ $ferryData->name }}">
                        <img width="100%" height="auto" src="/assets/images/sttimg/{{ $pageDetail->mob_herobanner }}"
                        class="vc_single_image-img attachment-full mob-img"
                        alt="{{ $ferryData->name }}">
                    </a>
                </div>
            </div>
    </section>

    

    <section class="blog-section fadeInUp animated">
        <div class="container">
            {{-- <div class="row"><a href="https://poferries.jyae.net/c/3882848/170847/3038?subId1=CTT&subId2=1230"
                    target="_blank">
                    <img src="/assets/images/sttimg/po-ferries-booking.jpg" width="100%" height="100%"
                        alt="{{ $ferryData->name }} banner"></a>
            </div> --}}
            <div class="row">
                <div id="ferry-eng">
                    <ul class="tabs">
                        <li class="tab-link active" data-tab="tab1">Return <span>&#8646;</span></li>
                        <li class="tab-link" data-tab="tab2">One Way <span>&#8594;</span></li>
                    </ul>
                    <div id="tab1" class="tab-content active">
                        <div class="list-boxouter">
                            <div class="list-box bg-box">
                                <div class="list-ficons">
                                    <i class="fa fa-route"></i>
                                </div>
                                <div class="">
                                    <div class="level-box">
                                        <label>Route</label>
                                    </div>
                                    <div class="select-box">
                                        <select class="custom-select" style="margin-right: 10px;">
                                            <option value="option1">Dover to Calais</option>
                                        </select>
                                        <span class="custom-select-arrow"><i class="fa fa-chevron-down"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box bg-box">
                                <div class="list-ficons">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="">
                                    <div class="level-box">
                                        <label>Passenger</label>
                                    </div>
                                    <div class="select-box">
                                        <select class="custom-select">
                                            <option value="option1">Passenger 1</option>
                                        </select>
                                        <span class="custom-select-arrow"><i class="fa fa-chevron-down"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box bg-box">
                                <div class="list-ficons">
                                    <i class="fa fa-car"></i>
                                </div>
                                <div class="">
                                    <div class="level-box">
                                        <label>Vehicle</label>
                                    </div>
                                    <div class="select-box">
                                        <select class="custom-select">
                                            <option value="option1">Car</option>
                                        </select>
                                        <span class="custom-select-arrow"><i class="fa fa-chevron-down"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box bg-box">
                                <div class="list-ficons">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="">
                                    <div class="level-box">
                                        <label>Current</label>
                                    </div>
                                    <div class="select-box">
					@php $dt = new DateTime(); @endphp
					<input class="custom-select custom-select-date" type="date" id="date" value="@php echo $dt->format('Y-m-d'); @endphp"/>
                                        <span class="custom-select-date-icon"><i class="fa fa-chevron-down"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box">
                                <button class="btn-custom">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-content">
                        <div class="list-boxouter">
                            <div class="list-box bg-box">
                                <div class="list-ficons">
                                    <i class="fa fa-route"></i>
                                </div>
                                <div class="">
                                    <div class="level-box">
                                        <label>Route</label>
                                    </div>
                                    <div class="select-box">
                                        <select class="custom-select">
                                            <option value="option1">Route 1</option>
                                            <option value="option2">Route 2</option>
                                            <option value="option3">Route 3</option>
                                        </select>
                                        <span class="custom-select-arrow"><i class="fa fa-chevron-down"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box bg-box">
                                <div class="list-ficons">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="">
                                    <div class="level-box">
                                        <label>Passenger</label>
                                    </div>
                                    <div class="select-box">
                                        <select class="custom-select">
                                            <option value="option1">Passenger 1</option>
                                            <option value="option2">Passenger 2</option>
                                            <option value="option3">Passenger 3</option>
                                        </select>
                                        <span class="custom-select-arrow"><i class="fa fa-chevron-down"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box bg-box">
                                <div class="list-ficons">
                                    <i class="fa fa-car"></i>
                                </div>
                                <div class="">
                                    <div class="level-box">
                                        <label>Vehical</label>
                                    </div>
                                    <div class="select-box">
                                        <select class="custom-select">
                                            <option value="option1">Car</option>
                                            <option value="option2">Bus</option>
                                            <option value="option3">Train</option>
                                        </select>
                                        <span class="custom-select-arrow"><i class="fa fa-chevron-down"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box bg-box">
                                <div class="list-ficons">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="">
                                    <div class="level-box">
                                        <label>Current</label>
                                    </div>
                                    <div class="select-box">
                                        <input class="custom-select custom-select-date" type="date" id="date"
                                            name="date" />
                                        <span class="custom-select-date-icon"><i class="fa fa-chevron-down"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box">
                                <button class="btn-custom">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- page description --}}
        </div>
        <div class="clear"></div>
        <div class="container">
            <h2 class="heading mb-0">{{ $ferryData->name }} Discount Codes and Deals for 2024</h2>
            @foreach ($dealsData as $dealRow)
                <div class="row">
                    <div class="heading mb-4"></div>
                    <div class="col-sm-12">
                        <div class="coupon-default">
                            <div class="get-deal">
                                <div class="discount-text">{{ $dealRow->discount }}</div>
                                <div class="deal-type">{{ ucwords($dealRow->discount_type) }}</div>
                            </div>
                            <div class="coupon-content">
                                <div class="coupon-header">
                                    <div class="title-box">
                                        <h3 class="coupon-title">{{ $dealRow->title }}</h3>
                                    </div>
                                    <div class="coupon-col-1-4">
                                        <div class="coupon-code">
                                            <a rel="nofollow" class="coupon-btn" title="Click Here To Get This Deal"
                                                href="{{ url($dealRow->dealurl) }}" target="_blank">
                                                <span class="coupon_deal_icon">
                                                    <img class=""
                                                        src="{{ url('/assets/images/sttimg') }}/deal-24.png"
                                                        alt="deal-24" />
                                                </span>{{ strtoupper($dealRow->discount_tag) }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="extra-content">
                                    <div class="col-3-4">
                                        <div class="coupon-description">
                                            <span class="full-description" id="ShowLess">
                                                <p> {!! substr($dealRow->description, 0, 200 ) !!} <a style="cursor:pointer">... Show More</a></p>
                                            </span>
                                            <span class="full-description" id="ShowMore" style="display:none">
                                                <p> {!! $dealRow->description !!} <a style="cursor:pointer">Show Less</a></p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-1-4">
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            {{-- <div class="share-buttons-container">
                                <div class="col-md-12">
                                    <a href="" alt="facebook" target="_blank" class="btn-social btn-facebook"><i
                                            class="facebook-f">
                                            <img class="svg"
                                                src="{{ url('/assets/images/sttimg') }}/facebook-f.svg"></i>
                                    </a>
                                    <a href="" alt="linkedin" target="_blank" class="btn-social btn-linkedin"><i
                                            class="linkedin">
                                            <img class="svg" src="{{ url('/assets/images/sttimg') }}/linkedin.svg"
                                                alt="LinkedIn"></i>
                                    </a>
                                    <a href="" alt="twitter" target="_blank" class="btn-social btn-twitter"><i
                                            class="twitter">
                                            <img class="svg" src="{{ url('/assets/images/sttimg') }}/twitter.svg"></i>
                                    </a>
                                </div>
                            </div> --}}
                            {{-- <div class="vote-wrapper">
                                <a class="vote-up" onclick="addVote(3,'1')">
                                    <span class="tooltip">It works.</span>
                                    <div class="thumbs-up">
                                        <img class="svg" src="{{ url('/assets/images/sttimg') }}/thumbs-up.svg">
                                    </div>
                                </a>
                                <span id="vote-percent3">0% Success</span>

                                <a class="vote-down" onclick="addVote(3,'-1')">
                                    <span class="tooltip">It doesn't!</span>
                                    <div class="thumbs-down">
                                        <img class="svg" src="{{ url('/assets/images/sttimg') }}/thumbs-down.svg">
                                    </div>
                                </a>
                            </div> --}}
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="clear"></div>
    </section>

    <section class="section-gray fadeInUp animated">
        <div class="container">
            <h1 class="heading mb-4"> {{ $ferryData->name }} - Ferry Tickets, Prices & Schedules</h1>
            <div class="row">
                <div class="col-md-12 tracking">
                    <a href="https://www.splitsaving.co.uk/" target="_blank">
                        <img width="100%" height="347" src="/assets/images/sttimg/{{ $pageDetail->banner }}"
                            class="vc_single_image-img attachment-full" style="float:left;margin-right:15px;"
                            alt="Split Train Tickets to London">
                    </a>
                    <div class="slide-read-more"> {!! $pageDetail -> description !!} </div>
                    <div class="slide-read-more-button read-more-button">Read More</div>
                    <div class="slide-read-more-button">Read Less</div>

                   <!-- <div class="coupon-description">
                        <span class="full-description" id="ShowLess">
                            <p> {!! substr($pageDetail -> description, 0, 1500 ) !!} <a class="readbox">... Read More</a></p>
                        </span>
                        <span class="full-description" id="ShowMore" style="display:none">
                            <p> {!! $pageDetail -> description !!} <a class="readbox">Read Less</a></p>
                        </span>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </section>

    <section class="section-gray fadeInUp animated">
        <div class="container">
            <div class="accordion-box">
                <h3 class="heading mt-4">P&O Ferries FAQs</h3>
                <div class="accordion" id="accordionExample">
                    @foreach ($faqData as $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false"
                                    aria-controls="collapse{{ $faq->id }}">
                                    {{ $faq->title }}
                                </button>
                            </h2>
                            <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {!! $faq->description !!}
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
    <script>
        $(document).ready(function() {
            $('.tab-link').on('click', function() {
                var tab = $(this).data('tab');
                $('.tab-content').removeClass('active');
                $('.tab-link').removeClass('active');
                $('#' + tab).addClass('active');
                $(this).addClass('active');
            });
        });
    </script>
    @include('common/reviewform')
@endsection
