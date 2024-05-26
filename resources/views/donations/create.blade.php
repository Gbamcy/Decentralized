@extends('layouts.master')
@section('title','donation/pledges')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            </div>
        </div><!-- End Breadcrumbs -->

        <section class="sample-page">
            <div class="container">

                <h6 class="mb-5">
                    <p> Make sure you fill the form and submit to print the receipt for confirmation after donation.</p>

                </h6>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Make Donation
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h6 class="modal-title" id="exampleModalLabel">Donation details<br>
                                    Acct no: 2155057692<br>
                                    Acct name:Johnson Philip<br>
                                    Bank name: UBA</h6>

                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            </div>
                            <div class="modal-body">
                                <!----form start--->
                                <form action="#" method="Post">

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

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Full name" name="name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Reason</label>
                                        <!--select--->
                                        <select class="form-select @error('reason') is-invalid @enderror" aria-label="Default select example" name="reason">
                                            <option default>Donation Title</option>
                                            <option value="tithe">Tithe</option>
                                            <option value="donation">Special offering</option>
                                            <option value="project">Project</option>
                                            <option value="others">Others</option>
                                        </select>
                                        @error('reason')
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                          </span>
                                    @enderror
                                    <!---select end-->
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                                        @error('message')
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Send message</button>
                                    </div>
                                    <!---form end--->

                                </form>

                            </div>


                        </div>
                    </div>
                </div>

                <!---modal end-->
            </div>

        </section>

    </main><!-- End #main -->
@endsection

