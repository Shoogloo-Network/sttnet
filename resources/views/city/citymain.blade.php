@extends('layouts.app')
@section('content')
    <section class="blog-section fadeInUp animated">
        <div class="container herobanner">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="heading mb-4">Split Train Tickets</h1>
                    <ul class="split-train-list row">
                        @foreach ($data as $city)
                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                <a href="{{ 'split-train-tickets-to-' . $city['slug'] . '.html' }}"> Split Train Tickets to
                                    {{ $city['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

