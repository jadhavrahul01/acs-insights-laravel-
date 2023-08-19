@extends('frontend.layouts.app')
@section('title', 'BS Photography')
@section('page')
            <header>
                <div class="headefr-fexid" data-dsn-header="project">
                    <div style="top: 50%;" class="bg" id="dsn-hero-parallax-img" data-dsn-ajax="img">
                        <div class="bg-image  cover-bg" data-overlay="2" data-image-src="  {{asset('user-assets/img/project/project6/bs-photography-featured-img.jpg') }}"></div>
                    </div>

                    <div class="scroll" data-dsn-animate="ajax">
                        <span class="background"></span>
                        <span class="triangle"></span>
                    </div>
                    <div class="project-title" id="dsn-hero-parallax-title">
                        <div class="title-text-header">
                            <div class="cat">
                                <span>Brands</span>
                            </div>
                            <span class="title-text-header-inner">
                                <span data-dsn-animate="ajax">BS Photography</span>
                            </span>
                        </div>

                        <div class="sub-text-header" data-dsn-animate="ajax">
                            <h5>Published</h5>
                            <span>- October 19th 2017</span>
                        </div>
                    </div>

                    <div class="project-page__inner">
                        <div class="h-100">
                            <div class="row justify-content-center align-items-end h-100">
                                <div id="descover-holder" class="col-lg-12 project-meta__content">
                                    <div class="link">
                                        <a target="_blank" href="https://www.behance.net/gallery/57437111/Under-Armour-Cal?tracking_source=search%7CPhotography">View
                                            Website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="wrapper">
                <div class="root-project">
                    <div class="container intro-project section-margin">
                        <div class="intro-text">
                            <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.1" data-dsn-duration="170%" data-dsn-move="0%">
                                Armour
                            </div>
                            <div class="inner">
                                <h2 data-dsn-animate="text">A whole new brand</h2>
                                <p data-dsn-animate="up">Cal was first. The first public university in the great state
                                    of California. They are the pioneers. They are the trailblazers who started it all.
                                    Same goes for Under Armour. When status quo was the status quo, they changed
                                    everything. Starting revolutions. Challenging authority. Being first. That’s what
                                    Cal and Under Armour have been doing since their respective day ones. Now, together,
                                    through passion, design, and the relentless pursuit of innovation, they fight to
                                    keep that revolutionary spirit alive.</p>
                                <ul class="mt-20" data-dsn-animate="up">
                                    <li>Art Direction: Kirk Roush</li>
                                    <li>Photography: Sam Gordon</li>
                                    <li>Copy: Dane Rahlf & Matt Norman</li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="container-fluid gallery-col section-margin">
                        <div class="row">
                            <div class="col-md-4 box-im section-padding">
                                <div class="image-zoom" data-dsn="parallax">
                                    <a class="single-image" href="#">
                                        <img src=" https://bsphotography.in/images/upload/slider/25.03.2023-ce140c0c-4807-4063-adaa-7b9cf360a677.jpg" alt="">
                                    </a>

                                    <div class="caption">Trevor Bittinger</div>
                                </div>
                            </div>

                            <div class="col-md-4 box-im section-padding">
                                <div class="image-zoom" data-dsn="parallax">
                                    <a class="single-image" href=" {{asset('user-assets/img/project/project4/4.jpg') }}">
                                        <img src=" https://bsphotography.in/images/upload/slider/23.05.2023-3fc08c8b-05fa-4e89-bf25-1b70250851c3.jpg" alt="">
                                    </a>
                                    <div class="caption">Sef McCullough</div>
                                </div>
                            </div>

                            <div class="col-md-4 box-im section-padding">
                                <div class="image-zoom" data-dsn="parallax">
                                    <a class="single-image" href=" {{asset('user-assets/img/project/project4/5.jpg') }}">
                                        <img src="https://bsphotography.in/images/upload/slider/25.03.2023-c6634e70-6a0b-4c80-a7fa-b234b050a556.jpg" alt="">
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
                                    <div style="    height: 72vh;" class="box-im" data-dsn-grid="move-up">
                                        <img class="has-top-bottom" src=" https://bsphotography.in/frontend/images/aboutme.jpg" alt="" data-dsn-move="20%">
                                    </div>
                                </div>

                                <div class="col-lg-6">


                                    <div class="box-info">

                                        <div class="vertical-title">
                                            <h2 data-dsn-animate="up">A little introduction</h2>
                                        </div>

                                        <h6 data-dsn-animate="up">I am a commercial and editorial photographer based out of Mumbai. An alumnus of National Institute of photography.</h6>

                                        <p data-dsn-animate="up">I enjoy telling stories through my photographs and I strive hard to accomplish that for my clients. My creativity, vision and execution of ideas through photographs works as a boon for my clients and their businesses..</p>

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



                    <div class="gallery-portfolio section-margin">
                        <a class="link-pop" href=" {{asset('user-assets/img/project/project4/6.jpg') }}" data-source=" {{asset('user-assets/img/project/project4/6.jpg') }}">
                            <img src="https://bsphotography.in/images/upload/photo/62b10949-a9a0-4efb-b3d2-ac828296ad9b-28.03.2023.min.jpg" alt="">
                            <div class="cap">
                                <span>Web Design</span>
                            </div>
                        </a>
                        <a class="link-pop" href=" {{asset('user-assets/img/project/project4/7.jpg') }}" data-source=" {{asset('user-assets/img/project/project4/7.jpg') }}">
                            <img src="https://bsphotography.in/images/upload/photo/63eb3d4e-21e0-4d1f-80b2-b0de29071d8c-04.04.2023.min.jpg" alt="">
                            <div class="cap">
                                <span>Web Design</span>
                            </div>
                        </a>

                        <a class="link-pop" href=" {{asset('user-assets/img/project/project4/8.jpg') }}" data-source=" {{asset('user-assets/img/project/project4/8.jpg') }}">
                            <img src="https://bsphotography.in/images/upload/photo/848d616c-698f-45c4-b730-bed8de68ec74-04.04.2023.min.jpg" alt="">
                            <div class="cap">
                                <span>Web Design</span>
                            </div>
                        </a>

                        <a class="link-pop" href=" {{asset('user-assets/img/project/project4/9.jpg') }}" data-source=" {{asset('user-assets/img/project/project4/9.jpg') }}">
                            <img src="https://bsphotography.in/images/upload/photo/9a7e5778-cb2f-4a71-8ea2-85ac5d970ff9-04.04.2023.min.jpg" alt="">
                            <div class="cap">
                                <span>Web Design</span>
                            </div>
                        </a>

                        <a class="link-pop" href=" {{asset('user-assets/img/project/project4/10.jpg') }}" data-source=" {{asset('user-assets/img/project/project4/10.jpg') }}">
                            <img src="https://bsphotography.in/images/upload/photo/4bdd5598-b2ae-4c71-a495-d4e9f72ab516-04.04.2023.min.jpg" alt="">
                            <div class="cap">
                                <span>Web Design</span>
                            </div>
                        </a>

                        <a class="link-pop" href=" {{asset('user-assets/img/project/project4/11.jpg') }}" data-source=" {{asset('user-assets/img/project/project4/11.jpg') }}">
                            <img src="https://bsphotography.in/images/upload/photo/359c6a5e-b0ca-4630-aeae-308019e0ae38-04.04.2023.min.jpg" alt="">
                            <div class="cap">
                                <span>Web Design</span>
                            </div>
                        </a>

                        <a class="link-pop" href=" {{asset('user-assets/img/project/project4/12.jpg') }}" data-source="assets/img/project/project4/12.jpg">
                            <img src="https://bsphotography.in/images/upload/photo/7e54f25c-3eaf-4c0e-bf60-c36d2196fca8-28.03.2023.min.jpg" alt="">
                            <div class="cap">
                                <span>Web Design</span>
                            </div>
                        </a>

                    </div>

                </div>

                <div class="next-project" data-dsn-footer="project">
                    <div id="dsn-next-parallax-img" class="bg">
                        <div class="bg-image cover-bg" data-overlay="4" data-image-src=" https://bsphotography.in/images/upload/photo/75dceb8a-f322-4b53-8ae5-eb9aa7e01df0-28.03.2023.min.jpg"></div>
                    </div>

                    <div id="dsn-next-parallax-title" class="project-title">
                        <a href="project-5.html" class="effect-ajax" data-dsn-ajax="next-project">
                            <div class="title-text-header">
                                <div class="title-text-header-inner">
                                    <span>Novara Conic</span>
                                </div>
                            </div>
                            <div class="sub-text-header">
                                <h5>Next Project</h5>
                            </div>
                        </a>
                    </div>
                </div>



            </div>
        </div>




@endsection
