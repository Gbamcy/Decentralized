@extends('layouts.master')
@section('title','template for audio clip and videos')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Stream</h2>
            <ol>
                <li><a href="#"></a></li>
                <li>videos and audios sermons</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row position-relative">
                <div class="col-lg-7 about-img" style="background-image: url(assets/img/media.jpg);"></div>
                <div class="col-lg-7">
                    <h2>Sermon</h2>
                    <div class="our-story">
                        <h3>Video sermon</h3>
                        <div class="watch-video d-flex align-items-center position-relative">
                            <iframe width="420" height="315" src="//www.youtube.com/embed/ZsIcsPRjE-A?si=3msGngv9Bjn97qz2" frameborder="0" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

@endsection
