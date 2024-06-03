
@extends('layouts.master')
@section('title','welcome')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">


        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down"> <span> Welcome to <br> Rhema Salvation</span></h2>
                        <p data-aos="fade-up">We believe that the Bible is the inspired word of God and our guide for daily living and are eager to share this good news with others.</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-2.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-3.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)"></div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Get Started Section ======= -->
        <section id="get-started" class="get-started section-bg">

        <!-- ======= Features Section ======= -->
        <section id="features" class="features section-bg">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row  g-2 d-flex">

                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Meet Pastor</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Baptism </h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Bible Study</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <h4>Miracle Service</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <h3>Pastor Philip Johnson</h3>
                                <p class="fst-italic">
                                    Pastor Philip Johnson is the General Overseer and founder of Rhema Salvation City Ministry.<br> Philip Johnson and Wife.
                                </p>

                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{asset('assets/img/features-1.jpg')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Baptism</h3>
                                <p class="fst-italic">
                                    Join our fellowship and be Baptize.
                                </p>

                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{asset('assets/img/features-2.jpg')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Bible Study</h3>

                                <p class="fst-italic">
                                    Join us and enjoy Bible study at your comfort time anywhere.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-3.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Attend our miracle and healing </h3>
                                <p class="fst-italic">
                                    Join our miracle and healing services and your life will never be the same.
                                </p>

                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{('assets/img/features-4.jpg')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                </div>

            </div>
        </section><!-- End weekly Section -->


        <!-- ======= Our Gallery section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <h2>Dive into Our Gallery</h2>

                    </div>

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-remodeling">Sermon</li>
                        <li data-filter=".filter-construction">Choir ministry</li>
                        <li data-filter=".filter-repairs">Crusade</li>
                        <li data-filter=".filter-design">Prayers</li>
                    </ul><!-- End gallery Filters -->

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/remodeling-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Preaching</h4>
                                    <p>Preach the Good News</p>
                                    <a href="{{asset('assets/img/projects/remodeling-1.jpg')}}" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/construction-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Church service</h4>
                                    <p>Sing praises unto the Lord</p>
                                    <a href="{{asset('assets/img/projects/construction-1.jpg')}}" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/repairs-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Preaching good news</h4>
                                    <p>Congregation sing</p>
                                    <a href="{{asset('assets/img/projects/repairs-1.jpg')}}" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->


                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/remodeling-2.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Church Service</h4>
                                    <p>Year message</p>
                                    <a href="{{asset('assets/img/projects/remodeling-2.jpg')}}" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/construction-2.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Service ongoing</h4>
                                    <p>Service in progress</p>
                                    <a href="{{asset('assets/img/projects/construction-2.jpg')}}" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/design-2.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Miracle service</h4>
                                    <p>Worship with us </p>
                                    <a href="{{asset('assets/img/projects/design-2.jpg')}}" title="Repairs 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/remodeling-3.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Praise and Worship</h4>
                                    <p>Worship the Lord your God</p>
                                    <a href="{{asset('assets/img/projects/remodeling-3.jpg')}}" title="Remodeling 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="'project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/construction-3.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Choir ministration</h4>
                                    <p>Sing praises and worship to the Lord</p>
                                    <a href="{{asset('assets/img/projects/construction-3.jpg')}}" title="Construction 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/design-3.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sermon</h4>
                                    <p>Congregation listen</p>
                                    <a href="{{asset('assets/img/projects/design-3.jpg')}}" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->

                    </div><!-- End gallery Container -->

                </div>

            </div>
        </section><!-- End Our gallery Section -->

        <!-- ======= weekly activities ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Weekly activities</h2>
                    <p>Our weekly activities includes:</p>
                </div>

                <div class="slides-2 swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{asset('assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                                    <h3>Sundays</h3>
                                    <h4>Miracle and Deliverance Service</h4>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Time: 8:30am - 12:30pm
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{asset('assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                                    <h3>Monday</h3>
                                    <h4>General prayer Warriors</h4>

                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Time: 3:30pm -6:00pm

                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{asset('assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                                    <h3>First Thursday of The Month</h3>
                                    <h4>Partnership meeting</h4>


                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Time:4:30pm -6:00pm
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{asset('assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                                    <h3>Healing Services</h3>
                                    <h4>Prophetic Healing and Deliverance Service.</h4>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Time: 4:30pm - 4:00pm
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{asset('assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                                    <h3>Fridays</h3>
                                    <h4>General Fasting Service.</h4>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Time:5:00pm - 7:00pm
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{('assets/img/testimonials/request.jpg')}}" class="testimonial-img" alt="">
                                    <h3>Every Last Friday of The Month</h3>
                                    <h4>Online Facebook Prayers.</h4>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Time:10:00pm - 11:00pm
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row position-relative">

                <div class="col-lg-7 about-img" style="background-image: url(assets/img/about.jpg);"></div>

                <div class="col-lg-7">
                    <h2>Rhema Media</h2>
                    <div class="our-story">

                        <h3>Our media channels</h3>

                        <div class="watch-video d-flex align-items-center position-relative">
                            <i class="bi bi-cassette"></i>
                            <a href="https://www.audio.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Play audio</a>
                        </div>
                        <br>

                        <div class="watch-video d-flex align-items-center position-relative">
                            <i class="bi bi-play-circle"></i>
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
