@extends('layouts.master')
@section('title','activities')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Weekly Activities</h2>
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li> activities</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <section class="sample-page">
            <div class="container">
                <section id="stats-counter" class="stats-counter section-bg">
                    <div class="container">

                        <div class="row gy-4">
                            <h4 class="text-center">Our activities</h4>

                            <div class="col-lg-3 col-md-6">
                                <div class="stats-item d-flex align-items-center w-100 h-100">
                                    <i class="bi bi-book color-blue flex-shrink-0"></i>
                                    <div>
                                        <h5>Sundays</h5>
                                        <br>

                                        <h6>miracle and deliverance service</h6>
                                        <br>
                                        <p>8:30am-12:30am</p>
                                        <br>

                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-md-6">
                                <div class="stats-item d-flex align-items-center w-100 h-100">
                                    <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                                    <div>
                                        <h5>Mondays</h5>
                                        <br>

                                        <h6>General Prayer Warriors</h6>
                                        <br>
                                        <p>3:30pm-6:00pm</p>
                                        <br>

                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-md-6">
                                <div class="stats-item d-flex align-items-center w-100 h-100">
                                    <i class="bi bi-person-raised-hand color-green flex-shrink-0"></i>
                                    <div>

                                        <h5>Wednesdays</h5>
                                        <br>

                                        <h6>Prophetic healing and deliverance service</h6>
                                        <br>
                                        <p>8:30am-4:00pm</p>
                                        <br>

                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-md-6">
                                <div class="stats-item d-flex align-items-center w-100 h-100">
                                    <i class="bi bi-people color-pink flex-shrink-0"></i>
                                    <div>

                                        <h5>First Thursday of the Month</h5>
                                        <br>

                                        <h6>Partnership meeting</h6>
                                        <br>
                                        <p>4:30pm</p>
                                        <br>

                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-md-6">
                                <div class="stats-item d-flex align-items-center w-100 h-100">
                                    <i class="bi bi-house color-pink flex-shrink-0"></i>
                                    <div>

                                        <h5>Fridays</h5>
                                        <br>

                                        <h6>General Prayer and Fasting Service</h6>
                                        <br>
                                        <p>5:00pm-7:00pm</p>
                                        <br>

                                    </div>
                                </div>
                            </div><!-- End Stats Item -->
                            <div class="col-lg-3 col-md-6">
                                <div class="stats-item d-flex align-items-center w-100 h-100">
                                    <i class="bi bi-facebook color-pink flex-shrink-0"></i>
                                    <div>
                                        <h5>Every Last Friday of  the Month</h5>
                                        <br>

                                        <h6>online facebook prayers</h6>
                                        <br>
                                        <p>10:00pm</p>
                                        <br>

                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                        </div>

                    </div>
                </section><!-- End Stats Counter Section -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
