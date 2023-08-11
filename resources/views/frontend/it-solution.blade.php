@extends('frontend.layouts.app')
@section('title', 'It Solution')
@section('page')
    <div data-image-src="{{ asset('user-assets/img/banner/it-solutions-hero-banner.jpg') }}" data-overlay="4"
        class="header-hero header-hero-2 ">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="text-center col-lg-12">
                    <div class=" contenet-hero">
                        <h1>It Solution</h1>
                        <h6 style="font-weight: 200; margin-top:20px;">Our comprehensive consultancy services can help your
                            business reach its full potential. Analyzing, strategizing, and implementing solutions that
                            drive growth are our specialties.
                            You can rely on us for every step of the way, from refining operations to expanding.
                            Take your business landscape to the next level with insight that matters and strategies that
                            work.
                        </h6>
                        {{-- <p>Building strong connections between brands and their target customers through data-driven digital marketing approaches.</p> --}}
                        {{-- <a href="#" class="view-case scroll-down scroll-to">Scroll Down <img src="assets/img/arrow-right-wight.png" alt=""></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="intro-about section-margin">

        <!--  Thanks to frontendmentor.io for the challenge.  -->

    @endsection
