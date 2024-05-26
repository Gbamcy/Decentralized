@extends('layouts.master')
@section('title','gallery details')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Gallery Details</h2>
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Gallery details</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Gallery Details Section ======= -->
        <section id="project-details" class="project-details">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="position-relative h-100">
                    <div class="slides-1 portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/projects/remodeling-1.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/projects/construction-1.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/projects/design-1.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/projects/repairs-1.jpg')}}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>

                <div class="row justify-content-between gy-4 mt-4">

                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <h2>Sharing Good news with congregation </h2>
                            <p>
                                Preaching and healing ongoing with Pastor Philip Johnson
                            </p>
                            <p>
                                We believe that people repent and are baptized, their sins are forgiven, they receive the Holy Spirit and are added to Jesus’ church. (Acts 2:38)
                            </p>

                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    We believe that a person is saved by the grace of God through faith in Jesus. (Romans 3:23-25).
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>

                            </div>

                        </div>
                    </div>



                </div>

            </div>
        </section> <!-- End gallery Details Section -->

    </main> <!-- End #main -->

@endsection
