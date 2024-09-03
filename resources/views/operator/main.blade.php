@extends('layouts.app')
@section('content')
@include('common/raileasy')
<section class="popular-bg2 fadeInUp animated">
      <div class="container">
        <h1 class="heading mb-4">{{ $pageDetail['title'] }}</h1>
        <div class="row">
          <div class="col-md-12 tracking">
            <p>{!! $pageDetail['description'] !!}</p>
          </div>
        </div>
      </div>
      <div class="clear"></div>
</section>
<section class="popular-bg2 fadeInUp animated">
    <div class="container">
    <div class="row">
    @foreach($data as $operator)
        <div class="col-md-3 plr-0 flex-none">
        <div class="column-inner">
            <div class="column-wrapper">
            <div class="banner-img">
                <img src="/assets/images/sttimg/{{$operator['logo']}}" alt="">
            </div>
            <div class="heading2">{{$operator['name']}}</div>
            <div class="banner-txt">{!! $operator['shortdesc'] !!}</div>
            <div class="view-box">
                <a class="view-btn" href="{{ route('operator.detail', [$operator['slug']]) . '.html' }}" title="">Read More</a>
            </div>
            </div>
        </div>
        </div>
    @endforeach
    </div>
    </div>
    <div class="clear"></div>
</section>
@endsection
