<div class="preloader">
    <div class="preloader-after"></div>
    <div class="preloader-before"></div>
    <div class="preloader-block">
        <div class="title">Acs Insights</div>
        <div class="percent">0</div>
        <div class="loading">loading...</div>
    </div>
    <div class="preloader-bar">
        <div class="preloader-progress"></div>
    </div>
</div>

<!-- Nav Bar -->

{{-- <div class="dsn-nav-bar">
<div class="site-header">
    <div class="extend-container">
        <div class="inner-header">
            <div class="main-logo">
                <a href="index.html">
                    <img class="dark-logo" src="{{asset('user-assets/img/logo/acslogo.svg')}}" alt="">
                    <img class="light-logo" src="{{asset('user-assets/img/logo/acslogo.svg')}}" alt="">
                </a>
            </div>
        </div>
        <nav class=" accent-menu main-navigation">
            <ul class="extend-container">
                <li class="">
                    <a href="{{url('/')}}">Home</a>

                </li>


                <li class="custom-drop-down">
                    <a href="{{url('services')}}">Our Services</a>
                    <ul>
                        <li><a href="{{url('services')}}">All Services</a></li>
                        <li><a href="{{url('business-consultancy')}}">Business Consultancy</a></li>
                        <li><a href="{{url('services')}}">Marketing Solutions
                        </a></li>
                        <li><a href="{{url('services')}}">IT Solutions </a></li>
                    </ul>
                </li>


                <li><a href="{{url('work')}}">Work </a></li>

                <li class="">
                    <a href="{{url('about')}}">About Us</a>

                </li>
                <li class="">
                    <a href="{{url('contact')}}">Contact us </a>

                </li>

            </ul>
        </nav>
    </div>
</div>
<div class="header-top header-top-hamburger">
    <div class="header-container">
        <div class="logo main-logo">
            <a href="{{ '/' }}">
                <img class="acslogo dark-logo" src="{{asset('user-assets/img/logo/acslogo.svg')}}" alt="">
                <img class="acslogo light-logo" src="{{asset('user-assets/img/logo/acslogo.svg')}}" alt="">
            </a>
        </div>

        <div class="menu-icon" data-dsn="parallax" data-dsn-move="5">
            <div class="icon-m">
                <i class="menu-icon-close fas fa-times"></i>
                <span class="menu-icon__line menu-icon__line-left"></span>
                <span class="menu-icon__line"></span>
                <span class="menu-icon__line menu-icon__line-right"></span>
            </div>

            <div class="text-menu">
                <div class="text-button">Menu</div>
                <div class="text-open">Open</div>
                <div class="text-close">Close</div>
            </div>
        </div>

        <div class="nav">
            <div class="inner">
                <div class="nav__content">

                </div>
            </div>
        </div>
        <div class="nav-content">
            <div class="inner-content">
                <p class="v-middle" style="text-align: left; font-style: none;">
                    <span style="font-style: none !important;"><font style="font-size: 1.5rem;text-transform: none;">Address</font> : Office No 03, Indraprastha Building Bhimnagar Boisar <br> Palghar Near Jumani Digital Boisar tarapur <br> Road Maharashtra 401501</span>
                    <span style="font-style: none !important;"><font style="font-size: 1.5rem;text-transform: none;">Phone no</font></font> :

                        +91 8390194975 /
                        +91 9145455019</span>

                    </p>
            </div>

        </div>
    </div>
</div>
</div> --}}
<!-- End Nav Bar -->









<nav style="background: #000000" class="navbar">

    <a href="/"> <img style="margin: 20px 0 20px 0; width:110px;" class="dark-logo"
            src="{{ asset('user-assets/img/logo/acslogo.svg') }}" alt=""></a>

    <div class="menu-container">
        <ul class="mega-menu">

            <!-- Mens -->
            <li class="dropdown">
                <div>
                    <a href="{{ url('/') }}">Home</a>
                    <span class="material-symbols-outlined">
                        chevron_right
                    </span>
                </div>
                {{-- <ul class="menu">
                    <li>
                        <a href="#">Men</a>
                    </li>
                    <li class="sub-dropdown">
                        <div>
                            <span>Featured</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">Featured</a>
                            </li>
                            <li>
                                <a href="#">New Releases</a>
                            </li>
                            <li>
                                <a href="# ">SKNRS Launch Calendar</a>
                            </li>
                            <li>
                                <a href="#">Bestsellers</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-dropdown">
                        <div>
                            <span>Shoes</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">All Shoes</a>
                            </li>
                            <li>
                                <a href="#">Lifestyle</a>
                            </li>
                            <li>
                                <a href="#">Jordan</a>
                            </li>
                            <li>
                                <a href="#">Running</a>
                            </li>
                            <li>
                                <a href="#">Football</a>
                            </li>
                            <li>
                                <a href="#">Basketball</a>
                            </li>
                            <li>
                                <a href="#">Training and Gym</a>
                            </li>
                            <li>
                                <a href="#">Skateboarding</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-dropdown">
                        <div>
                            <span>Clothing</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">All Clothing</a>
                            </li>
                            <li>
                                <a href="#">Lyfestyle</a>
                            </li>
                            <li>
                                <a href="#">Tops and T-Shirts</a>
                            </li>
                            <li>
                                <a href="#">Hoodies and Sweatshirts</a>
                            </li>
                            <li>
                                <a href="#">Shorts</a>
                            </li>
                            <li>
                                <a href="#">Tracksuits</a>
                            </li>
                            <li>
                                <a href="#">Trousers and Tights</a>
                            </li>
                            <li>
                                <a href="#">Jackets</a>
                            </li>
                            <li>
                                <a href="#">Kits and Jerseys</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-dropdown">
                        <div>
                            <span>Shop By Sport</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">All Sports</a>
                            </li>
                            <li>
                                <a href="#">Running</a>
                            </li>
                            <li>
                                <a href="#">Football</a>
                            </li>
                            <li>
                                <a href="#">Basketball</a>
                            </li>
                            <li>
                                <a href="#">Training and Gym</a>
                            </li>
                            <li>
                                <a href="#">Tennis</a>
                            </li>
                            <li>
                                <a href="#">Golf</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-dropdown">
                        <div>
                            <span>Accessories</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">All Accessories</a>
                            </li>
                            <li>
                                <a href="#">Bags and Backpacks</a>
                            </li>
                            <li>
                                <a href="#">Socks</a>
                            </li>
                        </ul>
                    </li>
                </ul> --}}
            </li>
            <!-- Women section -->
            <li class="dropdown">
                <div class="dropdown-li">
                    <a href="{{ url('services') }}">Our Services</a>

                    <span class="material-symbols-outlined">
                        chevron_right
                    </span>
                </div>
                <ul class="menu">
                    {{-- <li>
                        <a href="#">Our Services</a>
                    </li> --}}
                    <li class="sub-dropdown">
                        <div>
                            <span>Business</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ url('business-consultancy')}}">Business Consultancy</a>
                            </li>
                            <li>
                                <a href="{{ url('marketing-solution')}}">Marketing Solution</a>
                            </li>
                            <li>
                                <a href="{{ url('it-solution')}}">IT Solution</a>
                            </li>

                        </ul>
                    </li>
                    {{-- <li class="sub-dropdown">
                        <div>
                            <span>Shoes</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">All Shoes</a>
                            </li>
                            <li>
                                <a href="#">Lifestyle</a>
                            </li>
                            <li>
                                <a href="#">Jordan</a>
                            </li>
                            <li>
                                <a href="#">Running</a>
                            </li>
                            <li>
                                <a href="#">Training and Gym</a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="sub-dropdown">
                        <div>
                            <span>Clothing</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">All Clothing</a>
                            </li>
                            <li>
                                <a href="#">Lyfestyle</a>
                            </li>
                            <li>
                                <a href="#">Tops and T-Shirts</a>
                            </li>
                            <li>
                                <a href="#">Hoodies and Sweatshirts</a>
                            </li>
                            <li>
                                <a href="#">Leggings</a>
                            </li>
                            <li>
                                <a href="#">Trousers</a>
                            </li>
                            <li>
                                <a href="#">Shorts</a>
                            </li>
                            <li>
                                <a href="#">Tracksuits</a>
                            </li>
                            <li>
                                <a href="#">Sports Bra</a>
                            </li>
                            <li>
                                <a href="#">Matching Sets</a>
                            </li>
                            <li>
                                <a href="#">Jackets</a>
                            </li>
                            <li>
                                <a href="#">Skirts and Dresses</a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="sub-dropdown">
                        <div>
                            <span>Shop By Sport</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">All Sports</a>
                            </li>
                            <li>
                                <a href="#">Running</a>
                            </li>
                            <li>
                                <a href="#">Yoga</a>
                            </li>
                            <li>
                                <a href="#">HandBall</a>
                            </li>
                            <li>
                                <a href="#">Training and Gym</a>
                            </li>
                            <li>
                                <a href="#">Tennis</a>
                            </li>
                            <li>
                                <a href="#">Golf</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-dropdown">
                        <div>
                            <span>Accessories</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">All Accessories</a>
                            </li>
                            <li>
                                <a href="#">Bags and Backpacks</a>
                            </li>
                            <li>
                                <a href="#">Socks</a>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </li>
            <!-- Kids section -->
            <li class="dropdown">
                <div>
                    <a href="{{ url('work') }}">Work</a>
                    <span class="material-symbols-outlined">
                        chevron_right
                    </span>
                </div>
                <ul class="menu">
                    <li>
                        <a href="#">Work</a>
                    </li>
                    <li class="sub-dropdown">
                        <div>
                            <span>Featured</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">Featured</a>
                            </li>
                            <li>
                                <a href="#">New Releases</a>
                            </li>
                            <li>
                                <a href="#">Bestsellers</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-dropdown">
                        <div>
                            <span>Shoes</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">All Shoes</a>
                            </li>
                            <li>
                                <a href="#">Lifestyle</a>
                            </li>
                            <li>
                                <a href="#">Jordan</a>
                            </li>
                            <li>
                                <a href="#">Running</a>
                            </li>
                            <li>
                                <a href="#">Football</a>
                            </li>
                            <li>
                                <a href="#">Basketball</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-dropdown">
                        <div>
                            <span>Clothing</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">All Clothing</a>
                            </li>
                            <li>
                                <a href="#">Tops and T-Shirts</a>
                            </li>
                            <li>
                                <a href="#">Hoodies and Sweatshirts</a>
                            </li>
                            <li>
                                <a href="#">Shorts</a>
                            </li>
                            <li>
                                <a href="#">Tracksuits</a>
                            </li>
                            <li>
                                <a href="#">Trousers and Leggings</a>
                            </li>
                            <li>
                                <a href="#">Jackets</a>
                            </li>
                            <li>
                                <a href="#">Kits and Jerseys</a>
                            </li>
                            <li>
                                <a href="#">Sport Clothing</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-dropdown">
                        <div>
                            <span>Kids by age</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">Baby & Toddler(0-3 years)</a>
                            </li>
                            <li>
                                <a href="#">Younger Kids(3-7 years)</a>
                            </li>
                            <li>
                                <a href="#">Older Kids(7-15 years)</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-dropdown">
                        <div>
                            <span>Accessories</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">All Accessories</a>
                            </li>
                            <li>
                                <a href="#">Bags and Backpacks</a>
                            </li>
                            <li>
                                <a href="#">Socks</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- Sales section -->
            <li class="dropdown">
                <div>
                    <a href="{{ url('about') }}">About</a>
                    <span class="material-symbols-outlined">
                        chevron_right
                    </span>
                </div>

            </li>
            <!-- Collections section -->
        </ul>
    </div>
    <div class="grid"><a class="btn11" href="{{ url('contact') }}">Free Consultation</a></div>



    {{-- mobile menu start --}}
    <div class="mobilemenu">
<div class="dsn-nav-bar">
<div class="site-header">
    <div class="extend-container">
        <div class="inner-header">
            <div class="main-logo">
                <a href="index.html">
                    <img class="dark-logo" src="{{asset('user-assets/img/logo/acslogo.svg')}}" alt="">
                    <img class="light-logo" src="{{asset('user-assets/img/logo/acslogo.svg')}}" alt="">
                </a>
            </div>
        </div>
        <nav class=" accent-menu main-navigation">
            <ul class="extend-container">
                <li class="">
                    <a href="{{url('/')}}">Home</a>

                </li>


                <li class="custom-drop-down">
                    <a href="{{url('services')}}">Our Services</a>
                    <ul>
                        <li><a href="{{url('services')}}">All Services</a></li>
                        <li><a href="{{url('business-consultancy')}}">Business Consultancy</a></li>
                        <li><a href="{{url('services')}}">Marketing Solutions
                        </a></li>
                        <li><a href="{{url('services')}}">IT Solutions </a></li>
                    </ul>
                </li>


                <li><a href="{{url('work')}}">Work </a></li>

                <li class="">
                    <a href="{{url('about')}}">About Us</a>

                </li>
                <li class="">
                    <a href="{{url('contact')}}">Free Consultation us </a>

                </li>

            </ul>
        </nav>
    </div>
</div>
<div class="header-top header-top-hamburger">
    <div class="header-container">
        <div class="menu-icon" data-dsn="parallax" data-dsn-move="5">
            <div class="icon-m">
                <i class="menu-icon-close fas fa-times"></i>
                <span class="menu-icon__line menu-icon__line-left"></span>
                <span class="menu-icon__line"></span>
                <span class="menu-icon__line menu-icon__line-right"></span>
            </div>

            <div class="text-menu">
                <div class="text-button">Menu</div>
                <div class="text-open">Open</div>
                <div class="text-close">Close</div>
            </div>
        </div>
        <div class="nav">
            <div class="inner">
                <div class="nav__content">

                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
    {{-- mobile menu end --}}

<!-- End Nav Bar -->
    {{-- <div class="grid"><a class="btn11" href="{{ url('contact') }}">Free Consultation</a></div> --}}
</nav>
