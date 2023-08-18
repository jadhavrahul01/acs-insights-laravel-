@extends('frontend.layouts.app')
@section('title', 'acs insights')
@section('page')
    <main class="main-root">
        <div id="dsn-scrollbar">



            <div class="dsn-slider" data-dsn-header="project">
                <div class="dsn-root-slider" id="dsn-hero-parallax-img">
                    <div class="slide-inner">
                        <div class="swiper-wrapper">
                            <div class="slide-item swiper-slide">
                                <div class="slide-content">
                                    <div class="slide-content-inner">
                                        <div class="project-metas">
                                            {{-- <div class="project-meta-box project-work cat">
                                            <span>Architecture</span>
                                        </div> --}}
                                        </div>

                                        <div class="title-text-header">
                                            <div class="title-text-header-inner">

                                                <a href="{{ url('/') }}" class="effect-ajax" data-dsn-ajax="slider">
                                                    Marketing Solutions
                                                </a>

                                            </div>
                                        </div>
                                        <p>"Elevate your brand with tailored
                                            marketing solutions that captivate and
                                            convert."
                                        </p>
                                        <div class="link-custom">
                                            <a href="{{ url('contact') }}"class="image-zoom effect-ajax" data-dsn="parallax"
                                                data-dsn-ajax="slider">
                                                <span>Get In Touch</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-container">
                                    <div class="image-bg cover-bg"
                                        data-image-src="{{ asset('user-assets/img/banner/hero-marketing-solutions.jpg') }}"
                                        data-overlay="4">
                                        <img src="{{ asset('user-assets/img/banner/consultancy-hero-banner.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item swiper-slide">
                                <div class="slide-content">
                                    <div class="slide-content-inner">
                                        <div class="project-metas">
                                            {{-- <div class="project-meta-box project-work cat">
                                            <span>Architecture</span>
                                        </div> --}}
                                        </div>

                                        <div class="title-text-header">
                                            <div class="title-text-header-inner">
                                                <a href="project-5.html" class="effect-ajax" data-dsn-ajax="slider">
                                                    IT Solutions
                                                </a>
                                            </div>
                                        </div>

                                        <p>"Navigating your digital transformation with innovative IT solutions."</p>

                                        <div class="link-custom">
                                            <a href="project-5.html" class="image-zoom effect-ajax" data-dsn="parallax"
                                                data-dsn-ajax="slider">
                                                <span>Get In Touch</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-container">
                                    <div class="image-bg cover-bg"
                                        data-image-src="{{ asset('user-assets/img/banner/it-solutions-hero-banner.jpg') }}"
                                        data-overlay="4">
                                        <img src="{{ asset('user-assets/img/banner/it-solutions-hero-banner.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item swiper-slide">
                                <div class="slide-content">
                                    <div class="slide-content-inner">
                                        <div class="project-metas">
                                            {{-- <div class="project-meta-box project-work cat">
                                            <span>Architecture</span>
                                        </div> --}}
                                        </div>

                                        <div class="title-text-header">
                                            <div class="title-text-header-inner">
                                                <a href="project-5.html" class="effect-ajax" data-dsn-ajax="slider">
                                                    Business Consultancy
                                                </a>
                                            </div>
                                        </div>

                                        <p>"Empowering your success through strategic business consultancy."</p>

                                        <div class="link-custom">
                                            <a href="project-5.html" class="image-zoom effect-ajax" data-dsn="parallax"
                                                data-dsn-ajax="slider">
                                                <span>Get In Touch</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-container">
                                    <div class="image-bg cover-bg"
                                        data-image-src="{{ asset('user-assets/img/banner/consultancy-hero-banner.jpg') }}"
                                        data-overlay="4">
                                        <img src="{{ asset('user-assets/img/banner/consultancy-hero-banner.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dsn-slider-content"></div>


                <div class="nav-slider">
                    <div class="swiper-wrapper" role="navigation">
                        <div class="swiper-slide">
                            <div class="image-container">
                                <div class="image-bg cover-bg"
                                    data-image-src="{{ asset('user-assets/img/banner/hero-marketing-solutions.jpg') }}"
                                    data-overlay="2">
                                </div>
                            </div>
                            <div class="content">
                                <p>01</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-container">
                                <div class="image-bg cover-bg"
                                    data-image-src="{{ asset('user-assets/img/banner/it-solutions-hero-banner.jpg') }}"
                                    data-overlay="2">
                                </div>
                            </div>
                            <div class="content">
                                <p>02</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-container">
                                <div class="image-bg cover-bg"
                                    data-image-src="{{ asset('user-assets/img/banner/consultancy-hero-banner.jpg') }}"
                                    data-overlay="2">
                                </div>
                            </div>
                            <div class="content">
                                <p>03</p>
                            </div>
                        </div>

                    </div>
                </div>

                <section class="footer-slid" id="descover-holder">
                    {{-- <div class="main-social">
                        <div class="social-icon">
                            <div class="social-btn">
                                <div class="svg-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 23.3 23.2">
                                        <path
                                            d="M19.4 15.5c-1.2 0-2.4.6-3.1 1.7L7.8 12v-.7l8.5-5.1c.7 1 1.9 1.6 3.1 1.6 2.1 0 3.9-1.7 3.9-3.9S21.6 0 19.4 0s-3.9 1.7-3.9 3.9v.4L7 9.3c-1.3-1.7-3.7-2-5.4-.8s-2.1 3.7-.8 5.4c.7 1 1.9 1.6 3.1 1.6s2.4-.6 3.1-1.6l8.5 5v.4c0 2.1 1.7 3.9 3.9 3.9s3.9-1.7 3.9-3.9c0-2.1-1.7-3.8-3.9-3.8zm0-13.6c1.1 0 1.9.9 1.9 1.9s-.9 1.9-1.9 1.9-1.9-.7-1.9-1.8.8-2 1.9-2zM3.9 13.6c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.9-1.9 1.9zm15.5 7.8c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.8-1.9 1.9z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <ul class="social-network">
                            <li>
                                <a href="https://www.facebook.com/acsinsights">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/acsinsights">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/acsinsights/?igshid=MzRlODBiNWFlZA%3D%3D">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/acs-insights/">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div> --}}

                    <div class="control-num">
                        <span class="sup active">01</span>
                    </div>
                    <div class="control-nav">
                        <div class="prev-container" data-dsn="parallax">
                            <svg viewbox="0 0 40 40">
                                <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                                <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                            </svg>
                        </div>

                        <div class="next-container" data-dsn="parallax">
                            <svg viewbox="0 0 40 40">
                                <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                                <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                            </svg>
                        </div>
                    </div>
                </section>
            </div>






            <div class="wrapper">













                <section class="our-services-2 section-margin worksec-mar">
                    <div class="container margin-t">
                        <div class="one-title" data-dsn-animate="up">
                            <div class="title-sub-container">
                                <!-- <p class="title-sub">Our Servcies</p> -->
                            </div>
                            <h2 class="title-main"> What We do </h2>
                        </div>

                        <div class="row">

                            <div class="col-md-4">
                                <div class="services-item">
                                    <div class="corner corner-top"></div>
                                    <div class="corner corner-bottom"></div>
                                    <div class="icon">
                                        <img src="{{ asset('user-assets/img/services/3.png') }}" alt="">
                                    </div>
                                    <div class="services-header">
                                        <h3>Business <br> Consultancy</h3>
                                    </div>
                                    <p>Gain strategic insights and grow your company sustainably with our <br> business
                                        consultancy services.</p>
                                    <div class="link-custom">
                                        <a class="image-zoom effect-ajax" href="javascript:void(0)" data-dsn="parallax">
                                            <span>Start Thriving Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="services-item">
                                    <div class="corner corner-top"></div>
                                    <div class="corner corner-bottom"></div>
                                    <div class="icon">
                                        <img src="{{ asset('user-assets/img/services/1.png') }}" alt="">
                                    </div>
                                    <div class="services-header">
                                        <h3>Digital <br> Assets </h3>
                                    </div>
                                    <p>With data-driven marketing strategies, you'll increase visibility, boost visibility,
                                        and grow your business.</p>
                                    <div class="link-custom">
                                        <a class="image-zoom effect-ajax" href="javascript:void(0)" data-dsn="parallax">
                                            <span>Invest Now </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="services-item selected">
                                    <div class="corner corner-top"></div>
                                    <div class="corner corner-bottom"></div>
                                    <div class="icon">
                                        <img src="{{ asset('user-assets/img/services/2.png') }}" alt="">
                                    </div>
                                    <div class="services-header">
                                        <h3>IT <br> Services </h3>
                                    </div>
                                    <p>Integrate technology seamlessly and optimize performance with our comprehensive IT
                                        services.</p>
                                    <div class="link-custom">
                                        <a class="image-zoom effect-ajax" href="javascript:void(0)" data-dsn="parallax">
                                            <span>Experience Now </span>
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>





                <section class="mb-100 container">
                    <div class="c-wapp">
                        <div class="firstline">
                            <span class="fz-20 career mb-15">
                                WHO WE ARE
                            </span>
                        </div>
                        <div class="mb-20 secondline">
                            <span style="font-size:3.3rem;" class="text-center hiring"">
                                Why work with us
                            </span>
                        </div>
                        <div style="font-size: 1rem;" class="fz-20 secondline">
                            <span class="text-center hiring"">
                                Tap into our deep industry knowledge, innovative techniques, and meticulous attention <br>
                                to detail to accelerate your online growth.
                            </span>
                        </div>

                        <div class="who-row">
                            <div class="col-md-4">
                                <span>5+</span><br>
                                <p> Years of Industry <br> Experience</p>
                            </div>
                            <div class="col-md-4">
                                <span>100%</span><br>
                                <p> Focused on <br> Industries </p>
                            </div>
                            <div class="col-md-4">
                                <span>350+</span><br>
                                <p> Successful <br> Projects</p>
                            </div>
                        </div>

                    </div>


                </section>





                <section class="our-work work-under-header  section-margin " data-dsn-col="3">
                    <div class="container">
                        <div class="one-title">
                            <div class="title-sub-container">
                                <p class="title-sub">Our Work</p>
                            </div>
                            <h2 class="title-main">Passion-Driven Creations</h2>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9 offset-lg-3">
                                <div class="work-container">
                                    <div class="slick-slider">


                                        <div class="work-item slick-slide">
                                            <img class="has-top-bottom"
                                                src="{{ asset('user-assets/img/project/project6/ads-app-project-feature-image.jpg') }}"
                                                alt="">
                                            <div class="item-border"></div>
                                            <div class="item-info">
                                                <a href="#" data-dsn-grid="move-up" class="effect-ajax">

                                                    <h5 class="cat">App</h5>
                                                    <h4>ADS Reporting App</h4>
                                                    <span><span>Veiw Project</span></span>
                                                </a>

                                            </div>
                                        </div>



                                        <div class="work-item slick-slide">
                                            <img class="has-top-bottom"
                                                src="{{ asset('user-assets/img/project/project6/tmt-project-feature-image.jpg') }}"
                                                alt="">
                                            <div class="item-border"></div>
                                            <div class="item-info">
                                                <a href="the-mental-talkies.html" data-dsn-grid="move-up"
                                                    class="effect-ajax">

                                                    <h5 class="cat">Graphics</h5>
                                                    <h4>The Mental Talkies</h4>
                                                    <span><span>Veiw Project</span></span>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="work-item slick-slide">
                                            <img class="has-top-bottom"
                                                src="{{ asset('user-assets/img/project/project6/bs-photography-featured-img.jpg') }}"
                                                alt="">
                                            <div class="item-border"></div>
                                            <div class="item-info">
                                                <a href="bsphotography-project.html" data-dsn-grid="move-up"
                                                    class="effect-ajax">

                                                    <h5 class="cat">Website</h5>
                                                    <h4>BS Photography</h4>
                                                    <span><span>Veiw Project</span></span>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="work-item slick-slide">
                                            <img class="has-top-bottom"
                                                src="{{ asset('user-assets/img/project/project6/yosh-group-project-feature-image.jpg') }}"alt="">
                                            <div class="item-border"></div>
                                            <div class="item-info">
                                                <a href="yosh-group.html" data-dsn-grid="move-up" class="effect-ajax">

                                                    <h5 class="cat">Social Media Marketing</h5>
                                                    <h4>Yosh Group</h4>
                                                    <span><span>Veiw Project</span></span>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="work-item slick-slide">
                                            <img class="has-top-bottom"
                                                src="{{ asset('user-assets/img/project/project6/grassland-featured-img.jpg') }}"
                                                alt="">
                                            <div class="item-border"></div>
                                            <div class="item-info">
                                                <a href="grasslanddesign-project.html" data-dsn-grid="move-up"
                                                    class="effect-ajax">

                                                    <h5 class="cat">Logo</h5>
                                                    <h4>Grassland Design</h4>
                                                    <span><span>Veiw Project</span></span>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="work-item slick-slide">
                                            <img class="has-top-bottom"
                                                src="{{ asset('user-assets/img/project/project6/top-rathi-project-feature-image.jpg') }}"
                                                alt="">
                                            <div class="item-border"></div>
                                            <div class="item-info">
                                                <a href="top-rathee.html" data-dsn-grid="move-up" class="effect-ajax">

                                                    <h5 class="cat">Lead Generation</h5>
                                                    <h4>Top Rathee</h4>
                                                    <span><span>Veiw Project</span></span>
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <section class="client-see section-margin">
                    <div class="container">
                        <div class="inner">
                            <div class="left">
                                <h2 class="title" data-dsn-grid="move-section" data-dsn-move="-60"
                                    data-dsn-duration="100%" data-dsn-opacity="1" data-dsn-responsive="tablet">
                                    <span class="text">Feedback from our clients.</span>
                                </h2>
                            </div>

                            <div class="items">

                                <div class="bg"></div>
                                <div class="slick-slider">


                                    <div class="item">
                                        <div class="quote">
                                            <p>"I am extremely impressed with their operational efficiency and the
                                                exceptional attentiveness of their team. They excel at tackling challenges
                                                head-on and consistently deliver outstanding results. Their dedication and
                                                competence make them a remarkable team. Highly recommended!"</p>
                                        </div>
                                        <div class="bottom">
                                            <div class="avatar">
                                                <img src="{{ asset('user-assets/img/avatar/6.jpeg') }}" alt="">
                                            </div>
                                            <div class="label">
                                                <h6> Akhil Raj</h6>
                                                <br>
                                                <h6>(Publicize 360)</h6>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="quote">
                                            <p>"ACS Insights graphics services are unmatched! Their captivating visuals and
                                                stunning designs exceeded my expectations. Highly recommended for top-notch
                                                graphic solutions!"</p>
                                        </div>
                                        <div class="bottom">
                                            <div class="avatar">
                                                <img src="https://amalov.com/wp-content/uploads/elementor/thumbs/LHM-CV-photo-p9kl0et88z54zc6ioiuwfysc4kra67db92bczfss5k.jpg"
                                                    alt="">
                                            </div>
                                            <div class="label">
                                                <h6>Veronica Liew Hui Mei</h6>
                                                <br>
                                                <h6>(Founder At Amalav)</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="quote">
                                            <p>"Arise Consultancy's expertise is commendable! They guided me through every
                                                aspect of my business, leading to a remarkable ROI increase. Their
                                                well-structured roadmap, from inventory management to business expansion, is
                                                highly recommended!"</p>
                                        </div>
                                        <div class="bottom">
                                            <div class="avatar">
                                                <img src="{{ asset('user-assets/img/avatar/4.jpeg') }}" alt="">
                                            </div>
                                            <div class="label">
                                                <h6> Dr. Geeta Raju </h6>
                                                <br>
                                                <h6>(Partner At Petals India)</h6>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="quote">
                                            <p>"Their content writing, graphics, and customized email template services are
                                                exceptional. Engaging content, stunning visuals, and professional email
                                                templates make them a top choice. Highly recommended for all your marketing
                                                needs!"</p>
                                        </div>
                                        <div class="bottom">
                                            <div class="avatar">
                                                <img src="{{ asset('user-assets/img/avatar/5.jpeg') }}" alt="">
                                            </div>
                                            <div class="label">
                                                <h6>Tania Sharma</h6>
                                                <br>
                                                <h6>(Growth Manager Workindia)</h6>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="quote">
                                            <p>"The team's creativity knows no bounds as they consistently produce
                                                innovative and remarkable designs. Their ability to think outside the box is
                                                truly commendable."</p>
                                        </div>
                                        <div class="bottom">
                                            <div class="avatar">
                                                <img src="{{ asset('user-assets/img/avatar/7.jpeg') }}" alt="">
                                            </div>
                                            <div class="label">
                                                <h6>Sabir Shaikh </h6>
                                                <br>
                                                <h6>(The Mental Talkies)</h6>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="quote">
                                            <p>"The team's high activity level and extensive knowledge across various
                                                business segments are truly impressive."</p>
                                        </div>
                                        <div class="bottom">
                                            <div class="avatar">
                                                <img src="{{ asset('user-assets/img/avatar/8.jpeg') }}" alt="">
                                            </div>
                                            <div class="label">
                                                <h6>Abhijeet Aswar</h6>
                                                <br>
                                                <h6>(Founder At TA)</h6>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="our-news section-margin">
                    <div class="container">
                        <div class="one-title" data-dsn-animate="up">
                            <div class="title-sub-container">
                                <!-- <p class="title-sub">Latest News</p> -->
                            </div>
                            <h2 class="title-main">Blogs </h2>
                        </div>
                        <div class="custom-container">
                            <div class="slick-slider">
                                <div class="item-new slick-slide">
                                    <div class="image" data-overlay="5">
                                        <img src="{{ asset('user-assets/img/blog/ai-blogs.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="background"></div>
                                        <h5>Web , Brand</h5>

                                        <div class="cta">
                                            <a class="blog-head" href="/exploring-the-future-of-AI">Exploring the Future
                                                of AI -
                                                Advancements, Challenges, and Impact on Society
                                            </a>
                                        </div>

                                        <p class="blog-content">Simple point-and-shoot digital cameras can give surprising
                                            quality when they
                                            have the right lenses and sensors.</p>

                                    </div>
                                </div>

                                <div class="item-new slick-slide">
                                    <div class="image" data-overlay="5">
                                        <img src="{{ asset('user-assets/img/blog/effective-smm.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="background"></div>
                                        <h5>Web , Brand</h5>

                                        <div class="cta">
                                            <a class="blog-head" href="/effective-social-media-marketing-tips">Effective
                                                Social Media Marketing- Tips and Best Practices</a>
                                        </div>

                                        <p class="blog-content">Simple point-and-shoot digital cameras can give surprising
                                            quality when they
                                            have the right lenses and sensors.</p>
                                    </div>
                                </div>

                                <div class="item-new slick-slide">
                                    <div class="image" data-overlay="5">
                                        <img src="{{ asset('user-assets/img/blog/web-devlopment-blogs.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="content">
                                        <div class="background"></div>
                                        <h5>Web , Brand</h5>

                                        <div class="cta">
                                            <a class="blog-head" href="/simplifying-web-cms,app-development">Simplifying
                                                Web, CMS, and App Development with Low-Code Development</a>
                                        </div>

                                        <p class="blog-content">Simple point-and-shoot digital cameras can give surprising
                                            quality when they
                                            have the right lenses and sensors.</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>



                {{-- desktop section start --}}
                <section class="desktop-sec brand-client section-margin">
                    <div class="container">
                        <div class="one-title" data-dsn-animate="up">
                            <div class="title-sub-container">
                                <p class="title-sub">Clientele Base </p>
                            </div>
                            <h2 class="title-main">Your successful, our reputation</h2>
                        </div>

                        <div class="wapper-client1 wapper-client">
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/workindia-client.png') }}" alt="">
                            </div>
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/tpl-client.png') }}" alt="">
                            </div>
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/publicize-client.png') }}" alt="">
                            </div>
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/petals-client.png') }}" alt="">
                            </div>

                        </div>

                        <div class="wapper-client1 wapper-client ">
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/yosh-group.png') }}" alt="">
                            </div>
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/accelerate-client.png') }}" alt="">
                            </div>
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/ariel-client.png') }}" alt="">
                            </div>
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/tmt-client.png') }}" alt="">
                            </div>
                        </div>
                        <div class="wapper-client1 wapper-client ">
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/cracked-bycar-dekho.png') }}" alt="">
                            </div>
                        </div>

                    </div>

                </section>
                {{-- desktop section end --}}





                {{-- mobile section start --}}
                <section class="mobile-sec brand-client section-margin">
                    <div class="container mo-container">
                        <div style="margin-bottom: 1px;" class="one-title" data-dsn-animate="up">
                            <div class="title-sub-container">
                                <p class="title-sub">Clientele Base </p>
                            </div>
                            <h2 class="title-main">Your successful, our reputation</h2>
                        </div>

                        <div class="wapper-client1 wapper-client">
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/workindia-client.png') }}" alt="">
                            </div>
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/tpl-client.png') }}" alt="">
                            </div>


                        </div>

                        <div class="wapper-client1 wapper-client ">
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/publicize-client.png') }}" alt="">
                            </div>
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/petals-client.png') }}" alt="">
                            </div>
                        </div>
                        <div class="wapper-client1 wapper-client ">
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/yosh-group.png') }}" alt="">
                            </div>
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/ariel-client.png') }}" alt="">
                            </div>
                        </div>

                        <div class="wapper-client1 wapper-client ">
                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/cracked-bycar-dekho.png') }}" alt="">
                            </div>

                            <div class="col-3 logo-box logo-box1">
                                <img src="{{ asset('user-assets/img/logo/tmt-client.png') }}" alt="">
                            </div>
                        </div>
                        <div class="wapper-client1 wapper-client ">

                            <div class="col-3 logo-box logo-box1">

                                <img src="{{ asset('user-assets/img/logo/accelerate-client.png') }}" alt="">
                            </div>
                        </div>

                    </div>

                </section>
                {{-- mobile section end --}}









                <section class="contact-up section-padding">
                    <div class="container">
                        <div class="c-wapp">
                            <a href="contact.html" class="effect-ajax justify-content-start mb-30">
                                <span class="career">
                                    Let’s Chat
                                </span>


                            </a>
                            <a href="javascript:void(0)" class="effect-ajax">

                                <span style="width:100%;text-align: center;" class="hiring">
                                    What can we do for you ?
                                </span>

                            </a>

                        </div>
                    </div>
                    <div class="pop-up-btn text-center">
                        <a href="{{ url('contact') }}">
                            <button class="mt-100 first-button image-zoom effect-ajax" data-dsn-ajax="slider"><span>Get a
                                    Free Business Plan</span></button></a>
                    </div>
                    <!-- <div class="pop-up-btn">
                        <button onclick="togglePopup()" class="mt-100 first-button image-zoom effect-ajax" data-dsn-ajax="slider"><span>Get a Free Business Plan</span></button></div> -->
                    <div class="secondline">


                    </div>
                </section>

                <section class="pu-form">


                    <div class="popup" id="popup-1">
                        <div class="content">
                            <div class="close-btn" onclick="togglePopup()">
                                ×</div>


                            <div style="background-color: white;
               padding: 40px;
               border-radius: 40px;"
                                class="secondcol1">
                                <div class="">
                                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                                    <script>
                                        hbspt.forms.create({
                                            region: "na1",
                                            portalId: "40237595",
                                            formId: "9bed32e1-f64f-4d55-8f35-c2810566ef5a"
                                        });
                                    </script>

                                </div>
                            </div>
                            <div class="hubspot-cover"></div>

                        </div>
                    </div>
                </section>
                <!-- <button onclick="togglePopup()" class="first-button image-zoom effect-ajax" data-dsn-ajax="slider"><span>Get a Free Business Plan</span></button> -->
                <script>
                    function togglePopup() {
                        document.getElementById("popup-1")
                            .classList.toggle("active");
                    }
                </script>
                <!-- contact area end -->

            @endsection
