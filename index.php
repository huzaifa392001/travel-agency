<?php include 'include/header.php' ?>
<title>CDay Travel LLC</title>
</head>

<body>
    <?php include 'include/menu.php' ?>
    <div id="preloader"></div>

    <!-- MAIN HERO SECTION -->
    <section class="main-slider p-0" id="mainSlider">
        <div class="homeSlider">
            <img class=" bg-image" src="images/mainheroimg.png" alt="">
            <div class="slide-inner">
                <div class="container">
                    <div class="row aic">
                        <div class="col-lg-7 ml-auto">
                            <div class="hero-text">
                                <h2 data-swiper-parallax="-200">
                                    Awaken To A
                                    <span class="text-primary">Different</span>
                                    <span class="ml-auto">World</span>
                                </h2>
                                <div class="text-center">
                                    <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- !@MAIN HERO SECTION -->

    <!-- CTA BOOKING FORM SECTION -->
    <div class="cta-booking-section">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="flights-tab" data-toggle="tab" data-target="#flights" type="button" role="tab" aria-controls="flights" aria-selected="true"><i class="fas fa-plane"></i> flights
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="hotels-tab" data-toggle="tab" data-target="#hotels" type="button" role="tab" aria-controls="hotels" aria-selected="false"><i class="fas fa-bed"></i> hotels
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="flights" role="tabpanel" aria-labelledby="flights-tab">
                <form action="" class="search-cta-form">
                    <input type="text" class="form-control" placeholder="Origin">
                    <input type="text" class="form-control" placeholder="Destination">
                    <input type="date" class="form-control">
                    <input type="date" class="form-control">
                    <select class="form-control">
                        <option value="">1 Passenger</option>
                        <option value="">2 Passenger</option>
                        <option value="">3 Passenger</option>
                        <option value="">4 Passenger</option>
                    </select>
                    <button class="btn themeBtn">Search Now</button>
                </form>
            </div>
            <div class="tab-pane fade" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
                <form action="" class="search-cta-form">
                    <input type="text" class="form-control" placeholder="Origin">
                    <input type="text" class="form-control" placeholder="Destination">
                    <input type="date" class="form-control">
                    <input type="date" class="form-control">
                    <select class="form-control">
                        <option value="">1 Passenger</option>
                        <option value="">2 Passenger</option>
                        <option value="">3 Passenger</option>
                        <option value="">4 Passenger</option>
                    </select>
                    <button class="btn themeBtn">Search Now</button>
                </form>
            </div>
        </div>

    </div>
    <!-- !@CTA BOOKING FORM SECTION -->

    <!-- CTA INFO SECTION -->
    <section class="cta-info">
        <img src="images/icons/paraman.png" alt="img obj paraman" class="img-fluid obj">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="heading mt-5">
                        Adventure,
                        <span class="text-primary">Your Way</span>
                    </h2>
                    <p class="text">No matter who you’re looking to travel with, you can depend on our 2,500 trusted
                        operators to make sure everything’s taken care of. We are a small, family-owned, efficient tour
                        company. We are not corporate. Our company is made up of real, passionate, genuine people and we
                        are here to help you every step of the way.</p>
                </div>
                <div class="col-md-6">
                    <div class="crd-grid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="info-card">
                                    <figure>
                                        <img src="images/icons/info1.png" class="img-fluid" alt="">
                                    </figure>
                                    <h5>PERFECTLY ORGANISED</h5>
                                    <p>See where you can travel and find the best deals across thousands of flights, and
                                        hotels options.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="info-card">
                                    <figure>
                                        <img src="images/icons/info2.png" class="img-fluid" alt="">
                                    </figure>
                                    <h5>CHARMING HOTELS</h5>
                                    <p>Get free cancellation, plan on the go, and book last minute. Discover the world
                                        your way.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="info-card">
                                    <figure>
                                        <img src="images/icons/info3.png" class="img-fluid" alt="">
                                    </figure>
                                    <h5>THE BEST ROUTES</h5>
                                    <p>Enjoy personalized recommendations with over 60,000 tours, and attractions.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="info-card">
                                    <figure>
                                        <img src="images/icons/info4.png" class="img-fluid" alt="">
                                    </figure>
                                    <h5>DESTINATION BOOKING</h5>
                                    <p>With an easy and fast ticket purchase process. Most awaiting destinations that we
                                        work with.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- !@CTA INFO SECTION -->

    <!-- TOP ATTRACTION SECTION -->
    <section class="top-attraction-section">
        <h2 class="heading-sm text-center"><span class="text-primary">Top</span> Attractions</h2>
        <div class="swiper topplacesSlider">
            <svg class="top" viewBox="0 0 1440 69" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M-23.997 0C-23.999 0.065154 -24 0.130329 -24 0.195526C-24 38.027 308.876 68.6955 719.5 68.6955C1130.12 68.6955 1463 38.027 1463 0.195526C1463 0.130329 1463 0.065154 1463 0H-23.997Z"></path>
            </svg>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="" class="topplaces-card">
                        <img src="images/places1.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <h6>
                                <span class="hide">
                                    London
                                </span>
                                <span class="show">
                                    London
                                </span>
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="topplaces-card">
                        <img src="images/places2.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <h6>
                                <span class="hide">
                                    Maldives
                                </span>
                                <span class="show">
                                    Maldives
                                </span>
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="topplaces-card">
                        <img src="images/places3.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <h6>
                                <span class="hide">
                                    Rome
                                </span>
                                <span class="show">
                                    Rome
                                </span>
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="" class="topplaces-card">
                        <img src="images/places4.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <h6>
                                <span class="hide">
                                    istanbul
                                </span>
                                <span class="show">
                                    istanbul
                                </span>
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
            <svg class="bottom" viewBox="0 0 1440 69" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M-23.997 0C-23.999 0.065154 -24 0.130329 -24 0.195526C-24 38.027 308.876 68.6955 719.5 68.6955C1130.12 68.6955 1463 38.027 1463 0.195526C1463 0.130329 1463 0.065154 1463 0H-23.997Z"></path>
            </svg>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <!-- !@TOP ATTRACTION SECTION -->

    <!-- ABOUT SECTION -->
    <section class="about-section">
        <div class="container-fluid">
            <div class="col-lg-11 mx-auto">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <figure class="aboutfigure">
                            <span class="span1"></span>
                            <span class="span2"></span>
                            <span class="span3"></span>
                            <span class="span4"></span>
                            <img src="images/aboutlg.png" class="img-fluid" alt="">
                            <img src="images/aboutsm.png" class="img-fluid obj" alt="">
                        </figure>
                    </div>
                    <div class="col-md-6">
                        <h2 class="heading">Step By Step Into Your <span class="text-primary">Happiness</span></h2>
                        <p>So many people make this mistake in mentality, and as a result they put off their travel
                            goals for years unnecessarily. In fact, starting a travel lifestyle right now is well within
                            the possibility of many people</p>
                        <p>Company Name connects to vibrant cultures and fascinating landscapes with the world. Whether a
                            city tour for a day, a beach getaway for the weekend, a trip to the Northern Areas for a
                            week or a mountaineering expedition. No matter where in the world you want the go,
                            Company Name has got you covered.</p>
                        <a href="#" class="btn themeBtn">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- !@ABOUT SECTION -->

    <!-- CALENDER SECTION -->
    <section class="calender-section">
        <img src="images/icons/plane1.png" alt="" class="obj img-fluid">
        <div class="container">
            <div class="row align-items-center border-custom">
                <div class="col-md-7">
                    <h2 class="calenderHeading">Flight <span class="text-primary">Calendar</span></h2>
                    <div class="row">
                        <div class="col-md-6">
                            <form action="" class="search-flight-form">
                                <input type="text" class="form-control" placeholder="City">
                                <input type="text" class="form-control" placeholder="City">
                                <div class="my-4">
                                    <label for="oneway" class="form-check">
                                        <input type="checkbox" id="oneway" value="One way">
                                        <span>One way</span>
                                    </label>
                                    <label for="directflight" class="form-check">
                                        <input type="checkbox" id="directflight" value="Direct flights only">
                                        <span>Direct flights only</span>
                                    </label>
                                </div>
                                <p class="m-0">Vacation duration</p>
                                <div class="uislider-label">
                                    <label for="amount">From <span id="fromday">14</span> days</label>
                                    <label for="amount">to <span id="today">15</span> days</label>
                                </div>
                                <div id="slider-range"></div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="search-boxes">
                                <a href="#" class="search-items">
                                    <i class="far fa-search"></i>
                                    <span>November</span>
                                </a>
                                <a href="#" class="search-items">
                                    <i class="far fa-search"></i>
                                    <span>December</span>
                                </a>
                                <a href="#" class="search-items">
                                    <i class="far fa-search"></i>
                                    <span>January</span>
                                </a>
                                <a href="#" class="search-items">
                                    <i class="far fa-search"></i>
                                    <span>February</span>
                                </a>
                                <a href="#" class="search-items">
                                    <i class="far fa-search"></i>
                                    <span>March</span>
                                </a>
                                <a href="#" class="search-items">
                                    <i class="far fa-search"></i>
                                    <span>April</span>
                                </a>
                                <a href="#" class="search-items">
                                    <i class="far fa-search"></i>
                                    <span>May</span>
                                </a>
                                <a href="#" class="search-items">
                                    <i class="far fa-search"></i>
                                    <span>June</span>
                                </a>
                                <a href="#" class="search-items">
                                    <i class="far fa-search"></i>
                                    <span>July</span>
                                </a>
                                <a href="#" class="search-items">
                                    <i class="far fa-search"></i>
                                    <span>August</span>
                                </a>
                                <a href="#" class="search-items">
                                    <i class="far fa-search"></i>
                                    <span>September</span>
                                </a>
                                <a href="#" class="search-items">
                                    <i class="far fa-search"></i>
                                    <span>October</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <figure class="text-center revealImg">
                        <div class="wrap"></div>
                        <img src="images/flightimg.png" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- !@CALENDER SECTION -->

    <!-- TOP ATTRACTIONS -->
    <section class="top-attraction">
        <img src="images/icons/world.png" class="img-fluid obj" alt="">
        <div class="container-fluid">
            <h2 class="heading-sm text-center">Top <span class="text-primary">Attractions</span></h2>
            <div class="swiper attractionslider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="attraction-card">
                            <div class="card-content">
                                <p class="text-primary mb-0">BESTSELLER</p>
                                <p class="text-black mb-0">Sagrada Familia: Fast Track Ticket</p>
                                <p>Get fast-track access to Gaudí’s unfinished masterpiece</p>
                                <div class="attraction-card__bottom d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="attraction-card__reviews d-flex align-items-center flex-wrap">
                                        <ul class="d-flex align-items-center flex-wrap">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating">4.8</span>
                                        <span class="number">( 36300 )</span>
                                    </div>
                                    <div class="attraction-card__price">
                                        <h6 class="text-right mb-0">
                                            From
                                            <span class="d-block">$36.84</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <figure>
                                <img src="images/attraction1.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="attraction-card">
                            <div class="card-content">
                                <p class="text-primary mb-0">BESTSELLER</p>
                                <p class="text-black mb-0">Sagrada Familia: Fast Track Ticket</p>
                                <p>Get fast-track access to Gaudí’s unfinished masterpiece</p>
                                <div class="attraction-card__bottom d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="attraction-card__reviews d-flex align-items-center flex-wrap">
                                        <ul class="d-flex align-items-center flex-wrap">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating">4.8</span>
                                        <span class="number">( 36300 )</span>
                                    </div>
                                    <div class="attraction-card__price">
                                        <h6 class="text-right mb-0">
                                            From
                                            <span class="d-block">$33.11</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <figure>
                                <img src="images/attraction2.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="attraction-card">
                            <div class="card-content">
                                <p class="text-primary mb-0">BESTSELLER</p>
                                <p class="text-black mb-0">Sagrada Familia: Fast Track Ticket</p>
                                <p>Get fast-track access to Gaudí’s unfinished masterpiece</p>
                                <div class="attraction-card__bottom d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="attraction-card__reviews d-flex align-items-center flex-wrap">
                                        <ul class="d-flex align-items-center flex-wrap">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating">4.8</span>
                                        <span class="number">( 36300 )</span>
                                    </div>
                                    <div class="attraction-card__price">
                                        <h6 class="text-right mb-0">
                                            From
                                            <span class="d-block">$14.78</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <figure>
                                <img src="images/attraction3.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="attraction-card">
                            <div class="card-content">
                                <p class="text-primary mb-0">BESTSELLER</p>
                                <p class="text-black mb-0">Sagrada Familia: Fast Track Ticket</p>
                                <p>Get fast-track access to Gaudí’s unfinished masterpiece</p>
                                <div class="attraction-card__bottom d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="attraction-card__reviews d-flex align-items-center flex-wrap">
                                        <ul class="d-flex align-items-center flex-wrap">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating">4.8</span>
                                        <span class="number">( 36300 )</span>
                                    </div>
                                    <div class="attraction-card__price">
                                        <h6 class="text-right mb-0">
                                            From
                                            <span class="d-block">$24.08</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <figure>
                                <img src="images/attraction4.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="attrac-num__slider">
                <div id="prev" class="swiper-button-prev prev1"></div>
                <span class="line"></span>
                <div id="numberSlides">
                </div>
                <span class="line"></span>
                <div id="next" class="swiper-button-next next1"></div>
            </div>
        </div>
    </section>
    <!-- !@TOP ATTRACTIONS -->


    <!-- VIDEO SECTION -->
    <section class="video-cta">
        <img src="images/videoimg.png" class="img-fluid" alt="">
        <div class="control-box">
            <div>
                <span>Watch Video</span>
                <a href="#" class="btn play-btn">
                    <i class="fas fa-play"></i>
                </a>
            </div>
            <img src="images/icons/bottomarrow-icon.png" class="img-fluid" alt="">
        </div>
    </section>
    <!-- !@VIDEO SECTION -->

    <!-- TESTIMONIAL SECTION -->
    <section class="testimonial-section">
        <div class="container-fluid">
            <h2 class="heading-sm text-center mb-4"><span class="text-primary">satisfied</span> customers</h2>
            <div class="row">
                <div class="col-md-4">
                    <figure>
                        <img src="images/icons/swimmerman.png" class="img-fluid wave" alt="">
                    </figure>
                </div>
                <div class="col-md-8">
                    <div class="swiper testimonialSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <ul class="rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>Lorem Ipsum is simply dummy text of the printing and Ipsum has been industry's
                                        standard dummy text ever make a type specimen simply text of the printing and
                                        Ipsum has been industry's standard dummy book.</p>
                                    <div class="user-detail">
                                        <div class="user">
                                            <figure>
                                                <img src="images/user.png" class="img-fluid" alt="">
                                            </figure>
                                            <div>
                                                <p>Marcus Aurelius</p>
                                                <span>Life Coaching</span>
                                            </div>
                                        </div>
                                        <img src="images/icons/quote-icon.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <ul class="rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>Lorem Ipsum is simply dummy text of the printing and Ipsum has been industry's
                                        standard dummy text ever make a type specimen simply text of the printing and
                                        Ipsum has been industry's standard dummy book.</p>
                                    <div class="user-detail">
                                        <div class="user">
                                            <figure>
                                                <img src="images/user.png" class="img-fluid" alt="">
                                            </figure>
                                            <div>
                                                <p>Marcus Aurelius</p>
                                                <span>Life Coaching</span>
                                            </div>
                                        </div>
                                        <img src="images/icons/quote-icon.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <ul class="rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>Lorem Ipsum is simply dummy text of the printing and Ipsum has been industry's
                                        standard dummy text ever make a type specimen simply text of the printing and
                                        Ipsum has been industry's standard dummy book.</p>
                                    <div class="user-detail">
                                        <div class="user">
                                            <figure>
                                                <img src="images/user.png" class="img-fluid" alt="">
                                            </figure>
                                            <div>
                                                <p>Marcus Aurelius</p>
                                                <span>Life Coaching</span>
                                            </div>
                                        </div>
                                        <img src="images/icons/quote-icon.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="swiper-pagination page"></div>
                        </div>
                        <div class="col-md-2">
                            <div class="swiper-controls">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- !@TESTIMONIAL SECTION -->

    <!-- ACTIVITES SECTION -->
    <section class="activities-section">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <h2 class="heading">Exotic Tour <span class="text-primary">Activities</span></h2>
                    <a href="#" class="btn themeBtn">View More</a>
                </div>
                <div class="col-md-8">
                    <div class="swiper activitySlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="activity-card">
                                    <img src="images/activity1.png" class="img-fluid" alt="">
                                    <div class="text-content">
                                        <p>Metropolitan Museum of Art...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="activity-card">
                                    <img src="images/activity2.png" class="img-fluid" alt="">
                                    <div class="text-content">
                                        <p>Marvel Universe in New York</p>
                                    </div>
                                </div>
                                <div class="activity-card">
                                    <img src="images/activity3.png" class="img-fluid" alt="">
                                    <div class="text-content">
                                        <p>Soho, Chinatown and Little Italy</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="activity-card">
                                    <img src="images/activity4.png" class="img-fluid" alt="">
                                    <div class="text-content">
                                        <p>9/11 Memorial & Museum Ticket...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <div class="swiper-controls">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- !@ACTIVITES SECTION -->


    <!-- PARTNERS SECTION -->
    <section class="partner-section">
        <img src="images/icons/swimmer2.png" class="img-fluid obj wave" alt="">
        <div class="container-fluid">
            <h2 class="heading-sm text-center"><span class="text-primary">Our Top</span> Partners</h2>
            <div class="partnerWrap">
                <div class="swiper logoSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="clientlogo">
                                <img src="images/logo1.png" class="img-fluid" alt="">
                            </div>
                            <div class="clientlogo">
                                <img src="images/logo2.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clientlogo">
                                <img src="images/logo3.png" class="img-fluid" alt="">
                            </div>
                            <div class="clientlogo">
                                <img src="images/logo4.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clientlogo">
                                <img src="images/logo5.png" class="img-fluid" alt="">
                            </div>
                            <div class="clientlogo">
                                <img src="images/logo6.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clientlogo">
                                <img src="images/logo7.png" class="img-fluid" alt="">
                            </div>
                            <div class="clientlogo">
                                <img src="images/logo8.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clientlogo">
                                <img src="images/logo9.png" class="img-fluid" alt="">
                            </div>
                            <div class="clientlogo">
                                <img src="images/logo10.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev prev1"></div>
                <div class="swiper-button-next next1"></div>
            </div>
        </div>
    </section>
    <!-- !@PARTNERS SECTION -->


    <?php include 'include/footer.php' ?>