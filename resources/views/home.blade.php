@extends('layouts.master')

@section('content')
    <main id="main" class="home-carousel">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Rhema City Salvation Ministry </h2>

            </div>

        </div><!-- End Breadcrumbs -->


        <!-------carousel start------>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="{{asset('/img/new.jpg')}}" class="d-block w-100" alt="preaching with interpreter" height="500">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/new1.jpg')}}" class="d-block w-100" alt="prayers image" height="500">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/new2.jpg')}}" class="d-block w-100" alt="preaching image" height="500">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-----carousel end---->

    </main><!-- End #main -->

@endsection
