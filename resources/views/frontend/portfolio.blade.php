@extends('frontend.layouts.app')
@section('title', 'About Us')
@section('page')


<section class="intro-about section-margin">
    <div style="background-position: center;
    background-size: cover;" data-image-src="{{ asset('user-assets/img/project/project6/hero-section.jpg') }}" data-overlay="5"
        class="header-hero header-hero-2 ">
        <div class="container h-100">
            <div class="row align-items-center h-100"   >
                <div class="text-center col-lg-12">
                    <div class=" contenet-hero">
                        <h1 style="max-width: 1084px;">Portfolio</h1>
                        </h6>
                        {{-- <p>Building strong connections between brands and their target customers through data-driven digital marketing approaches.</p> --}}
                        {{-- <a href="#" class="view-case scroll-down scroll-to">Scroll Down <img src="assets/img/arrow-right-wight.png" alt=""></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="wrapper">
    <div class="root-project">

        <div class="container intro-project section-margin">
            <div class="intro-text text-center">
                <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.1" data-dsn-duration="170%" data-dsn-move="0%">
                 PORTFOLIO
                </div>
                <div class="inner">
                    <h2 data-dsn-animate="text">Time Tag</h2>
                    <p data-dsn-animate="up">Sometimes, we need to check the time, wondering when our work
                        or meeting will finish, without getting caught by others. To avoid your boss’s
                        staring eye, you should not roll your eyes to check the time. The Time Tag Watch is
                        a consummately appropriate for it.
                        Those tags do the role of the hands of the watch. By rotating the face of the watch
                        not the hands, it gets harder to be damaged. It provides you with experience to feel
                        the time at the end of your finger without damaging your watch.</p>

                    {{-- <a class="bottom-link" data-dsn-animate="up" href="#" target="_blank">
                        <span></span>
                        <span></span>
                        <div class="content">
                            <div class="inner">
                                <p>VISIT SITE</p>
                            </div>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>

        <div class="container-fluid gallery-col">
            <div class="row">
                <div class="col-md-4 box-im section-padding">
                    <div class="image-zoom" data-dsn="parallax">
                        <a class="single-image" href="{{asset('user-assets/img/project/project9/2.jpg') }}">
                            <img src="{{asset('user-assets/img/project/project9/2.jpg') }}" alt="">
                        </a>

                        <div class="caption">Trevor Bittinger</div>
                    </div>
                </div>

                <div class="col-md-4 box-im section-padding">
                    <div class="image-zoom" data-dsn="parallax">
                        <a class="single-image" href=" {{asset('user-assets/img/project/project9/3.jpg') }}">
                            <img src=" {{asset('user-assets/img/project/project9/3.jpg') }}" alt="">
                        </a>
                        <div class="caption">Sef McCullough</div>
                    </div>
                </div>

                <div class="col-md-4 box-im section-padding">
                    <div class="image-zoom" data-dsn="parallax">
                        <a class="single-image" href=" {{asset('user-assets/img/project/project9/4.jpg') }}">
                            <img src=" {{asset('user-assets/img/project/project9/4.jpg') }}" alt="">
                        </a>
                        <div class="caption">Sef McCullough</div>
                    </div>
                </div>

            </div>
        </div>

        <div class=" box-gallery-vertical section-margin section-padding">
            <div class="mask-bg"></div>
            <div class="container">
                <div class="row align-items-center h-100">
                    <div class="col-lg-6 ">
                        <div class="box-im" data-dsn-grid="move-up">
                            <img class="has-top-bottom" src=" {{asset('user-assets/img/project/project9/5.jpg') }}" alt="" data-dsn-move="20%">
                        </div>
                    </div>

                    <div class="col-lg-6">


                        <div class="box-info">

                            <div class="vertical-title">
                                <h2 data-dsn-animate="up">IT STARTS WITH US.</h2>
                            </div>

                            <h6 data-dsn-animate="up">We set THE blue and gold standard, emblazoned it with
                                a bear, and held it high.
                                Then we watched our passion spread across the state.</h6>

                            <p data-dsn-animate="up">Challenging the status quo, driving forward, never
                                backing down.
                                The future of intelligence. The future of excellence.
                                The future of defiance, innovation, and sport.
                                This is where it all begins.</p>

                            <div class="link-custom" data-dsn-animate="up">
                                <a class="image-zoom" href="#" data-dsn="parallax">
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="box-seat">
            <div class="dsn-v-text">
                <div class="container-fluid">
                    <div class="box-middle-text">
                        <a href="https://vimeo.com/175353205" class="vid">
                            <div class="play-button">
                                <div class="play-btn">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="inner-img" data-dsn-grid="move-up">
                        <img class="has-top-bottom" src=" {{asset('user-assets/img/project/project9/7.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="box-seat section-margin">
            <div class="container-fluid">
                <div class="inner-img" data-dsn-grid="move-up">
                    <img src="{{asset('user-assets/img/project/project9/13.jpg') }}" alt="">
                </div>
                <div class="pro-text" data-dsn-grid="move-section">
                    <h3 data-dsn-animate="text">Take a seat <br> at a table on the ground floor</h3>
                    <p data-dsn-animate="text">Not quite a cafe, not quite a restaurant, we offer innovative
                        fare
                        for
                        breakfast, lunch and dinner, alongside specialty coffee and a wine list
                        featuring
                        varietals ranging from South Africa to Spain...</p>
                </div>
            </div>
        </div>


        <div class="gallery-portfolio section-margin">
            <a class="link-pop" href=" {{asset('user-assets/img/project/project9/6.jpg') }}" data-source=" {{asset('user-assets/img/project/project9/6.jpg') }}">
                <img src=" {{asset('user-assets/img/project/project9/6.jpg') }}" alt="">
                <div class="cap">
                    <span>Web Design</span>
                </div>
            </a>

            <a class="link-pop" href="{{asset('user-assets/img/project/project9/8.jpg') }}" data-source="{{asset('user-assets/img/project/project9/8.jpg') }}">
                <img src="{{asset('user-assets/img/project/project9/8.jpg') }}" alt="">
                <div class="cap">
                    <span>Web Design</span>
                </div>
            </a>

            <a class="link-pop" href="{{asset('user-assets/img/project/project9/9.jpg') }}" data-source="{{asset('user-assets/img/project/project9/9.jpg') }}">
                <img src="{{asset('user-assets/img/project/project9/9.jpg') }}" alt="">
                <div class="cap">
                    <span>Web Design</span>
                </div>
            </a>

            <a class="link-pop" href="{{asset('user-assets/img/project/project9/10.jpg') }}" data-source="{{asset('user-assets/img/project/project9/10.jpg') }}">
                <img src="{{asset('user-assets/img/project/project9/10.jpg') }}" alt="">
                <div class="cap">
                    <span>Web Design</span>
                </div>
            </a>

            <a class="link-pop" href="{{asset('user-assets/img/project/project9/11.jpg') }}" data-source="{{asset('user-assets/img/project/project9/11.jpg') }}">
                <img src="{{asset('user-assets/img/project/project9/11.jpg') }}" alt="">
                <div class="cap">
                    <span>Web Design</span>
                </div>
            </a>

            <a class="link-pop" href="{{asset('user-assets/img/project/project9/12.jpg') }}" data-source="{{asset('user-assets/img/project/project9/12.jpg') }}">
                <img src="{{asset('user-assets/img/project/project9/12.jpg') }}" alt="">
                <div class="cap">
                    <span>Web Design</span>
                </div>
            </a>

        </div>

    </div>

    {{-- <div class="next-project" data-dsn-footer="project">
        <div id="dsn-next-parallax-img" class="bg">
            <div class="bg-image cover-bg" data-overlay="4" data-image-src="assets/img/project/project1/1.jpg"></div>
        </div>

        <div id="dsn-next-parallax-title" class="project-title">
            <a href="project-1.html" class="effect-ajax" data-dsn-ajax="next-project">
                <div class="title-text-header">
                    <div class="title-text-header-inner">
                        <span>Magista</span>
                    </div>
                </div>
                <div class="sub-text-header">
                    <h5>Next Project</h5>
                </div>
            </a>
        </div>
    </div> --}}
</div>

@endsection
