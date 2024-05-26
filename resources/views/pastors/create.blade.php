@extends('layouts.master')
@section('title','pastor request form')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Meet Pastor</h2>
            <ol>
                <li><a href="#">Home</a></li>
                <li>Pastor Philip Johnson</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about mb-5" >
        <div class="container" data-aos="fade-up ">

            <div class="row position-relative">

                <div class="col-lg-7 about-img" style="background-image: url(assets/img/request.jpg);"></div>

                <div class="col-lg-7">
                    <h2>Meet Pastor Philip Johnson</h2>
                    <div class="our-story">
                        <ul class="pastor">
                            <li> Prayer Request</li>
                            <li>Bible  Study</li>
                            <li>Guidance and Counselling</li>
                            <li>Others</li>
                        </ul>




                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Make a request
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Request Form</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!----form in modal---->

                                        <form action="#" method="post" role="form" class="">

                                            @if (isset($errors) && $errors->any())
                                                @foreach ($errors->all() as $error)

                                                @endforeach
                                            @endif
                                            @if (session('status'))
                                                <div class="alert alert-success">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                            @csrf

                                            <div class="row mb-2">
                                                <div class="col-lg-6 form-group mb-2">
                                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" required>

                                                    @error('name')
                                                       <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                       </span>
                                                    @enderror

                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Your phone" required>

                                                    @error('phone')
                                                       <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                       </span>
                                                    @enderror

                                                </div>

                                            </div>

                                            <div class="form-group mb-2">
                                                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" placeholder="Message" required></textarea>

                                                @error('message')
                                                       <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                       </span>
                                                @enderror

                                            </div>
                                            <div class="my-3">

                                            </div>
                                            <div class="text-center"><button type="submit" class="btn btn-secondary">Send Message</button></div>
                                        </form>

                                        <!----form end---->
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>


@endsection
