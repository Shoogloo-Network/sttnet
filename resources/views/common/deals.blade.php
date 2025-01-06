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
                                <a href="{{ url($dealRow->dealurl != null ? $dealRow->dealurl : $pageDetail->merchant_link ) }}" rel="nofollow" class="coupon-btn"
                                    title="Click Here To Get This Deal" target="_blank">
                                    <span class="coupon_deal_icon">
                                        <img class="" src="{{ url('/assets/images/sttimg') }}/deal-24.png"
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
                                    <p> {!! substr($dealRow->description, 0, 200) !!} <a style="cursor:pointer">... Show More</a>
                                    </p>
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
            </div>
        </div>
    </div>
@endforeach
