@extends('layouts.app')
@section('content')
@include('common/raileasy')
<section class="section-gray fadeInUp animated">
      <div class="container">
        <h1 class="heading mb-5 mt-3">Save Big with Split Train Tickets {{$routeData->name }} | Times, Routes, and Attractions</h1>
        <div class="row">
          <div class="col-md-12 tracking">
			<div class="tracking-imgbox">
				<a href="https://www.splitsaving.co.uk/" target="_blank">
				  <img src="{{ url('/assets/images/sttimg/' . $pageDetail->banner) }}"
					class="vc_single_image-img attachment-full" style="float:left;margin-right:15px;"
					alt="Split Train Tickets to London">
				</a>
			</div>
		<div class="slide-read-more"> {!! $pageDetail -> description !!} </div>
		<div class="slide-read-more-button read-more-button">Read More</div>
		<div class="slide-read-more-button">Read Less</div>

              <!--<div class="coupon-description">
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
    @include('common/reviewform')
@endsection
