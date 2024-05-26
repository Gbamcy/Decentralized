@extends('layouts.master')
@section('title','donation/pledges')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Partnership</h2>
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Donate for Partnership</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->


        <section class="sample-page">
            <div class="container">

{{--                <h6 class="mb-5 text-center">--}}
{{--                    <h4> Make Donation.</h4>--}}
{{--                </h6>--}}


{{--                <form id="paymentForm">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="email">Email Address</label>--}}
{{--                        <input type="email" id="email-address" required />--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="amount">Amount</label>--}}
{{--                        <input type="tel" id="amount" required />--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="first-name">First Name</label>--}}
{{--                        <input type="text" id="first-name" />--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="last-name">Last Name</label>--}}
{{--                        <input type="text" id="last-name" />--}}
{{--                    </div>--}}
{{--                    <div class="form-submit">--}}
{{--                        <button type="submit" onclick="payWithPaystack()"> Make Donation </button>--}}
{{--                    </div>--}}
{{--                </form>--}}

                <div><h4>Make Donations</h4></div>
                <div class="stackform" style="text-align: center">
                    <div class="row">
                          <div class="col-md-6">
                             <form action="{{route('paystack.pay')}}" method="post">
                               @csrf
                               <input class="form-control mb-3" type="email" name="email" placeholder="Enter your email">
                               <input class="form-control mb-3" type="number" name="amount" placeholder="Enter amount in naira">
                              <button class=" btn btn-primary" type="submit">Donate</button>
                             </form>

                          </div>

                    </div>

                </div>


                <!-- Button trigger modal -->
{{--                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">--}}
{{--                    Make Donation--}}
{{--                </button>--}}

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
                                <form action="{{route('donations.store')}}" method="Post">

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
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Full name"  value="{{old('name')}}" name="name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Reason</label>
                                        <!--select--->
                                        <select class="form-select @error('reason') is-invalid @enderror" aria-label="Default select example" value="{{old('reason')}}" name="reason">
                                            <option  default unselect>Donation Title</option>
                                            <option value="tithe">Tithe</option>
                                            <option value="project">Project</option>
                                            <option value="partnership">Partnership</option>
                                            <option value="special offering">Special Offering</option>
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


@section('js')
    <script>
        const paymentForm = document.getElementById('paymentForm');
        paymentForm.addEventListener("submit", payWithPaystack, false);

        function payWithPaystack(e) {
            e.preventDefault();

            let handler = PaystackPop.setup({
                key: 'pk_test_0f767d9394b79976685727682346429294a2979a', // Replace with your public key
                email: document.getElementById("email-address").value,
                amount: document.getElementById("amount").value * 100,
                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                onClose: function(){
                    alert('Window closed.');
                },
                callback: function(response){
                    let message = 'Payment complete! Reference: ' + response.reference;
                    alert(message);
                }
            });

            handler.openIframe();
        }
    </script>
@endsection
