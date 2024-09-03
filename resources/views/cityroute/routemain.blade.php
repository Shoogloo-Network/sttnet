@extends('layouts.app')
@section('content')
    <section class="blog-section fadeInUp animated pt130">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="heading mb-4">Split Train Tickets</h1>
                    <ul class="split-train-list row">
                        @foreach ($data as $route)
                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                <a href="{{ route('cityroute.main', [$route['slug']]) . '.html' }}">{{ $route['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection