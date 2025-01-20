@extends('layouts.app')
@section('content')
    @include('common/raileasy')
    <section class="section-gray fadeInUp animated">
        <div class="container">
            <h1 class="heading mb-4">Save Big with Split Train Tickets to {{ $pageData->name }} | Times, Routes and Attractions </h1>
            <div class="row">
                <div class="col-md-12 tracking">
					<div class="tracking-imgbox">
						<a href="https://www.splitsaving.co.uk/" target="_blank">
							<img max-width:"100%" height="auto" src="/assets/images/sttimg/{{ $pageDetail[0]->banner }}"
								class="vc_single_image-img attachment-full"
								alt="Split Train Tickets to London">
						</a>
					</div>
		    <div class="slide-read-more"> {!! $pageDetail[0]->description !!} </div>
		    <div class="slide-read-more-button read-more-button">Read More</div>
		    <div class="slide-read-more-button">Read Less</div>

                    <!-- <div class="coupon-description">
                        <span class="full-description" id="ShowLess">
                            <p> {!! substr($pageDetail[0]->description, 0, 1500 ) !!} <a class="readbox">... Read More</a></p>
                        </span>
                        <span class="full-description" id="ShowMore" style="display:none">
                            <p> {!! $pageDetail[0]->description !!} <a class="readbox">Read Less</a></p>
                        </span>
                    </div>-->

                </div>
            </div>
        </div>
        <div class="clear"></div>
    </section>

    <section class="section-gray fadeInUp animated">
        <div class="container">
            <h3 class="heading mb-4">Popular Split Train Tickets Routes to {{ $pageData->name }}</h3>
            <div class="row">
                @foreach ($routeData as $routes)
                    <div class="col-md-3 plr-0 flex-none">
                        <div class="column-inner">
                            <div class="column-wrapper">
                                <div class="banner-img">
                                    <img src="/assets/images/sttimg/{{ $routes->route_logo }}"
                                        alt="{{ $routes->route_name }}">
                                </div>
                                <div class="heading2">{{ $routes->route_name }} Split Ticketing</div>
                                <div class="banner-txt">{!! substr($routes->route_shdesc, 0, 212) !!}</div>
                                <div class="view-box">
                                    <a class="view-btn" href="{{ url('split-train-ticket/' .$routes->route_slug. '.html') }}" title="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="clear"></div>
    </section>
    <section class="popular-bg2 fadeInUp animated">
        <div class="container">
            <h3 class="heading mb-4">Popular Train Companies to {{ $pageData->name }}</h3>
            <div class="row">
                @foreach ($agentData as $companies)
                    <div class="col-md-3 plr-0 flex-none">
                        <div class="column-inner">
                            <div class="column-wrapper">
                                <div class="banner-img">
                                    <img src="/assets/images/sttimg/{{ $companies->operator_logo }}"
                                        alt="{{ $companies->operator_name }}" height="370" width="370">
                                </div>
                                <div class="heading2">{{ $companies->operator_name }}</div>
                                <div class="banner-txt">{!! $companies->operator_shdesc !!}</div>
                                <div class="view-box">
                                    <a class="view-btn" href="{{ url('train-companies/' .$companies->operator_slug. '.html') }}" title=" {{ $companies->operator_slug }} train tickets ">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="clear"></div>
    </section>


    <?php if( count($faqData) > 0 ){ ?>
    <section class="section-gray fadeInUp animated">
        <div class="container">
            <div class="accordion-box">
                <h3 class="heading mt-4">FAQs: Split Train Tickets to {{ $pageData->name }}</h3>
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
    <?php } ?>

    <?php if( count($reviews) > 0 ){ ?>
    <section class="section-gray2 fadeInUp animated">
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
            <div class="clear"></div>
    </section>
   <?php } ?>

    @include('common/reviewform')
@endsection
