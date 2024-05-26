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

                        <h3>Video and Audio Sermons</h3>

                        <div class="watch-video d-flex align-items-center position-relative">
                            <i class="bi bi-play-circle"></i>
                            <a href="https://youtu.be/wGusCVECtzs" class="download">Play Audio</a>

                        </div>

                        <br>

                        <div class="watch-video d-flex align-items-center position-relative">
                            <i class="bi bi-play-circle"></i>
                            <a href="https://youtu.be/ZsIcsPRjE-A?si=3msGngv9Bjn97qz2" class="download">Watch Video</a>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

@endsection
