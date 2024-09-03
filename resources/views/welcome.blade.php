@extends('layouts.app')
@section('content')
    @include('common/raileasy')
    <section class="section-gray fadeInUp animated">
        <div class="container">
            <h1 class="heading mb-4">{{ $pageDetail->title }}</h1>
            <div class="row">
                @foreach ($citieshome as $cities)
                    <div class="col-md-4 col-sm-12 plr-0">
                        <div class="column-inner">
                            <div class="column-wrapper">
                                <div class="banner-img">
                                    <img src="{{ asset('assets/images/sttimg/' . $cities->banner) }}"
                                        title="{{ $cities->name }}" width="80%" height="70%">
                                </div>
                                <div class="heading2">Split Ticketing to {{ $cities->name }}</div>
                                <div class="banner-txt">{!! $cities->shortdesc !!}</div>
                                <div class="view-box">
                                    <a class="view-btn" href="{{ '/split-train-tickets-to-' .$cities->slug }}.html " title="">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="clear"></div>
    </section>

    <section class="popular-bg fadeInUp animated">
        <div class="container">
            <!-- <h3 class="heading mb-4">Popular Train Routes in UK</h3> -->
	    <h3 style="text-align:center;" class="mb-4">Popular Train Routes in UK</h3>
            <div class="row">
                @foreach ($trainroutes as $routes)
                    <div class="col-md-3 plr-0 flex-none">
                        <div class="column-inner">
                            <div class="column-wrapper">
                                <div class="banner-img">
                                    <img src="{{ asset('assets/images/sttimg/' . $routes->banner) }}"
                                        title="{{ $routes->name }}" width="80%" height="70%">
                                </div>
                                <div class="heading2">{{ $routes->name }} Split Ticketing</div>
                                <div class="banner-txt">{!! $routes->shortdesc !!}</div>
                                <div class="view-box">
                                    <a class="view-btn" href="{{ '/split-train-ticket/'. $routes->slug }}.html" title="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
        <div class="clear"></div>
    </section>

    <section class="section-gray fadeInUp animated">
        <div class="container">
	 <h2 class="mb-4">Split Train Tickets:</h2>
            <div class="col-md-12 tracking">
                 {!! $pageDetail->description !!}
            </div>
            <div class="accordion-box">
                <h3 class="heading mt-4">Split Train Tickets FAQs: </h3>
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

   {{-- <section class="section-gray2 fadeInUp animated">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading-section">Reviews</h3>

                    <div class="review-box">
                        @foreach ($reviews as $review)
                            <div class="glsr-review">
                                <div class="glsr-review-title">
                                    <h3>{{ $review->title }}</h3>
                                </div>
                                <div class="glsr-review-rating">
                                    <div class="glsr-stars"><span class="screen-reader-text">5.0 rating</span>
                                        <div class="fa {{ $review->rating >= 1 ? 'fa-star' : 'fa-star-o' }}"
                                            aria-hidden="true"></div>
                                        <div class="fa {{ $review->rating >= 2 ? 'fa-star' : 'fa-star-o' }}"
                                            aria-hidden="true"></div>
                                        <div class="fa {{ $review->rating >= 3 ? 'fa-star' : 'fa-star-o' }}"
                                            aria-hidden="true"></div>
                                        <div class="fa {{ $review->rating >= 4 ? 'fa-star' : 'fa-star-o' }}"
                                            aria-hidden="true"></div>
                                        <div class="fa {{ $review->rating >= 5 ? 'fa-star' : 'fa-star-o' }}"
                                            aria-hidden="true"></div>
                                    </div>
                                </div>
                                <div class="glsr-review-date"><span>{{ $review->created_at->format('d F Y') }}</span></div>
                                <div class="glsr-review-assigned_to"><span>Review of <a
                                            href="https://www.splitsaving.co.uk">Split
                                            Saving</a></span></div>
                                <div class="glsr-review-content" id="ShowLess">{!! Str::limit($review->description, 300) !!}...
                                    <a style="cursor:pointer">Show More</a>
                                </div>
                                <div class="glsr-review-content" id="ShowMore" style="display:none">
                                    {!! $review->description !!}...<a style="cursor:pointer">Show Less</a></div>
                                <div class="glsr-review-author"><span>{{ $review->name }}</span></div>
                            </div>
                        @endforeach   
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </section> --}}
    @include('common/reviewform')
@endsection
