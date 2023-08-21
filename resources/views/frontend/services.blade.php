@extends('frontend.layouts.app')
@section('title', 'Our Services')
@section('page')
    {{-- <div data-image-src="{{ asset('user-assets/img/project/project6/hero-section.jpg') }}" data-overlay="4"
        class="header-hero header-hero-2 ">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="text-center col-lg-12">
                    <div class=" contenet-hero">
                        <h1>Our Services</h1>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <section class="intro-about section-margin">
        <div style="background-position: center;
        background-size: cover;" data-image-src="{{ asset('user-assets/img/project/project6/hero-section.jpg') }}" data-overlay="5"
            class="header-hero header-hero-2 ">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="text-center col-lg-12">
                        <div class=" contenet-hero">
                            <h1>Our Services</h1>
                            </h6>
                            {{-- <p>Building strong connections between brands and their target customers through data-driven digital marketing approaches.</p> --}}
                            {{-- <a href="#" class="view-case scroll-down scroll-to">Scroll Down <img src="assets/img/arrow-right-wight.png" alt=""></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-about section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="">
                        <div class="">
                            <div class="">
                                <img data-dsn-y="30%"
                                    src=" {{asset('user-assets/img/services/business-consultancy-service-image.jpg')}}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="intro-content-text">
                        <h2  data-dsn-move="-30" data-dsn-duration="100%" data-dsn-opacity="1.2" data-dsn-responsive="tablet"
                            class="mb-10 dsn-move-section"
                            style="text-align:left; visibility: inherit; opacity: 1.08914; transform: translate3d(0px, -13.3717px, 0px);">
                            <br>
                            Business Consultancy
                        </h2>

                        <p style="font-size: 1.2rem;    max-width: 435px;" data-dsn-animate="up" class="dsn-active">
                            "Empowering your success through strategic business consultancy."

                        </p>
                        <div class="link-custom dsn-active" data-dsn-animate="up">
                            <a class="image-zoom " href="/business-consultancy">
                                <span>Learn More</span>
                                <div class="icon-circle"></div>
                            </a>
                        </div>
                        {{-- <h6 data-dsn-animate="animate" class="dsn-active"><span class="dsn-wrapper"><span class="dsn-word-wrapper">SALVADOR</span></span><span class="dsn-wrapper"><span class="dsn-word-wrapper">DALI</span></span></h6> --}}
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="intro-about section-margin">
        <div class="container">
            <div class="mo-ser-row row">
                <div class="col-lg-6">
                    <div class="intro-content-text">
                        <h2 data-dsn-move="-30" data-dsn-duration="100%" data-dsn-opacity="1.2" data-dsn-responsive="tablet"
                            class="mb-10 dsn-move-section"
                            style="text-align:left; visibility: inherit; opacity: 1.08914; transform: translate3d(0px, -13.3717px, 0px);">
                            <br>
                            Marketing Solutions
                        </h2>

                        <p style="font-size: 1.2rem;    max-width: 435px;" data-dsn-animate="up" class="dsn-active">
                            "Elevate your brand with tailored
                            marketing solutions that captivate and
                            convert."

                        </p>
                        <div class="link-custom dsn-active" data-dsn-animate="up">
                            <a class="image-zoom " href="/marketing-solution">
                                <span>Learn More</span>
                                <div class="icon-circle"></div>
                            </a>
                        </div>

                        {{-- <h6 data-dsn-animate="animate" class="dsn-active"><span class="dsn-wrapper"><span class="dsn-word-wrapper">SALVADOR</span></span><span class="dsn-wrapper"><span class="dsn-word-wrapper">DALI</span></span></h6> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <div class="">
                            <div class="">
                                <img data-dsn-y="30%"
                                    src=" {{asset('user-assets/img/services/marketing-solutions-service-image.jpg')}}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <section class="intro-about section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="">
                        <div class="">
                            <div class="">
                                <img data-dsn-y="30%"
                                    src=" {{asset('user-assets/img/services/it-solutions-service-image.jpg')}}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="intro-content-text">
                        <h2 data-dsn-move="-30" data-dsn-duration="100%" data-dsn-opacity="1.2" data-dsn-responsive="tablet"
                            class="mb-10 dsn-move-section"
                            style=" text-align:left; visibility: inherit; opacity: 1.08914; transform: translate3d(0px, -13.3717px, 0px);">
                            <br>
                            IT Solutions
                        </h2>

                        <p style="font-size: 1.2rem;    max-width: 435px;" data-dsn-animate="up" class="dsn-active">


                            "Navigating your digital transformation with innovative IT solutions."
                        </p>
                        <div class="link-custom dsn-active" data-dsn-animate="up">
                            <a class="image-zoom" href="/it-solution">
                                <span>Learn More</span>
                                <div class="icon-circle"></div>
                            </a>
                        </div>
                        {{-- <h6 data-dsn-animate="animate" class="dsn-active"><span class="dsn-wrapper"><span class="dsn-word-wrapper">SALVADOR</span></span><span class="dsn-wrapper"><span class="dsn-word-wrapper">DALI</span></span></h6> --}}
                    </div>
                </div>
            </div>
        </div>

    </section>








@endsection
