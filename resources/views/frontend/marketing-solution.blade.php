@extends('frontend.layouts.app')
@section('title', 'It Solution')
@section('page')




    <section style="margin-top: 120px" class="intro-about">
        <div style="background-position: center;
    background-size: cover;"
            data-image-src="{{ asset('user-assets/img/banner/marketing-hero-banner.jpg') }}" data-overlay="8"
            class="header-hero header-hero-2 ">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="text-center col-lg-12">
                        <div class=" contenet-hero">
                            <h1>Marketing Solution</h1>
                            <h6 style="font-weight: 200; margin-top:20px;">Join us on a transformative journey with our
                                marketing solutions. We craft a roadmap to elevate your brand's influence through tailored
                                strategies and cutting-edge digital techniques.
                            </h6>
                            {{-- <p>Building strong connections between brands and their target customers through data-driven digital marketing approaches.</p> --}}
                            {{-- <a href="#" class="view-case scroll-down scroll-to">Scroll Down <img src="assets/img/arrow-right-wight.png" alt=""></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
















    <section class="section-margin intro-about">


            <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">




            <div class=" slide-container swiper">
                <div class="container slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card1 swiper-slide">
                            <div class="image-content">
                                <span class=""><img src="	https://img.freepik.com/free-photo/rpa-concept-with-blurry-hand-touching-screen_23-2149311914.jpg?size=626&ext=jpg&ga=GA1.2.993756276.1691513559&semt=sph" alt=""
                                    class="card-img"></span>


                            </div>

                            <div class="card-content">
                                <h2 class="name">Marketing and Strategy
                                </h2>
                                <p class="description">Achieving success through innovative marketing and strategic thinking.</p>

                                {{-- <button class="button">View More</button> --}}
                            </div>
                        </div>
                        <div class="card1 swiper-slide">
                            <div class="image-content">
                                <span class=""><img src=" https://img.freepik.com/free-photo/standard-quality-control-collage-concept_23-2149595830.jpg?size=626&ext=jpg&ga=GA1.2.993756276.1691513559&semt=sph" alt=""
                                    class="card-img"></span>


                            </div>

                            <div class="card-content">
                                <h2 class="name">SEO
                                </h2>
                                <p class="description">Enhancing your online presence with expert SEO services.
                                </p>


                            </div>
                        </div>

                        <div class="card1 swiper-slide">
                            <div class="image-content">
                                <span class=""><img src="	https://img.freepik.com/free-photo/standard-quality-control-concept-m_23-2150041849.jpg?size=626&ext=jpg&ga=GA1.2.993756276.1691513559&semt=sph" alt=""
                                    class="card-img"></span>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Marketing Campaign
                                </h2>
                                <p class="description">Creating marketing campaigns that are results-driven and impactful.
                                </p>


                            </div>
                        </div>
                        <div class="card1 swiper-slide">
                            <div class="image-content">
                                <span class=""><img src="https://img.freepik.com/free-photo/standard-quality-control-collage-concept_23-2149595847.jpg?size=626&ext=jpg&ga=GA1.2.993756276.1691513559&semt=sph" alt=""
                                    class="card-img"></span>
                            </div>

                            <div class="card-content">
                                <h2 class="name">SMM
                                </h2>
                                <p class="description">Enhance your brand's reach through dynamic social media management.
                                </p>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>



        <!-- Swiper JS -->
        <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>

        <!-- JavaScript -->
        <!--Uncomment this line-->
        <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>





    </section>

    {{-- <section style="margin-top: 120px" class="intro-about">



        <div class="swiper-container">
            <div class="swiper-wrapper">


                <div class="swiper-slide">
                    <div class="container-general">
                        <div class="gallery-wrap wrap-effect-3">
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </section> --}}




@endsection
