@extends('layouts.master')
@section('title','gallery')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Gallery</h2>
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Gallery</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Our Gallery section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

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
                                    <a href="{{asset('assets/img/projects/remodeling-1.jpg')}}" title="preaching" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{url('/gallery-detail')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/construction-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Church service</h4>
                                    <p>Sing praises unto the Lord</p>
                                    <a href="{{asset('assets/img/projects/construction-1.jpg')}}" title="praise and worship" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                   <a href="{{url('/gallery-detail')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/repairs-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Preaching good news</h4>
                                    <p>Congregation sing</p>
                                    <a href="{{asset('assets/img/projects/repairs-1.jpg')}}" title="sermon" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{url('/gallery-detail')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->


                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/remodeling-2.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Church Service</h4>
                                    <p>Year message</p>
                                    <a href="{{asset('assets/img/projects/remodeling-2.jpg')}}" title="Preaching" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{url('/gallery-detail')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/construction-2.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Service ongoing</h4>
                                    <p>Service in progress</p>
                                    <a href="{{asset('assets/img/projects/construction-2.jpg')}}" title="sermon" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{url('/gallery-detail')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/design-2.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Miracle service</h4>
                                    <p>Worship with us </p>
                                    <a href="{{asset('assets/img/projects/design-2.jpg')}}" title="sermon" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{url('/gallery-detail')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/remodeling-3.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Praise and Worship</h4>
                                    <p>Worship the Lord your God</p>
                                    <a href="{{asset('assets/img/projects/remodeling-3.jpg')}}" title="praises" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{url('/gallery-detail')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/construction-3.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Choir ministration</h4>
                                    <p>Sing praises and worship to the Lord</p>
                                    <a href="{{asset('assets/img/projects/construction-3.jpg')}}" title="praises" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{url('/gallery-detail')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/projects/design-3.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sermon</h4>
                                    <p>Congregation listen</p>
                                    <a href="{{asset('assets/img/projects/design-3.jpg')}}" title="sermon" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{url('/gallery-detail')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End gallery Item -->

                    </div><!-- End gallery Container -->

                </div>

            </div>

        </section><!-- End Our gallery Section -->

    </main><!-- End #main -->

@endsection
