@extends('layouts.master')
@section('title','audio')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2><i class="bi bi-megaphone"></i></h2>
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Announcement</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <section class="sample-page">
            <div class="container">

                <!---form start--->

                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header" style="background: gray; color:#f1f7fa; font-weight:bold;">
                                Make audio
                                <a href="#" class="btn btn-success btn-xs py-0 float-end">Back</a>
                            </div>
                            @if($errors->any())
                                {!! implode('', $errors->all('<div>:message</div>')) !!}
                            @endif
                            <div class="card-body">

                                <form class="w-px-500 p-3 p-md-3" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title" @error('title') is-invalid @enderror>
                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Audio</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" name="audio" accept="audio" value="{{old('audio')}}" placeholder="Audio here" @error('audio') is-invalid @enderror>
                                            @error('audio')
                                            <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Message</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control @error('description') is-invalid @enderror" placeholder="message" id="exampleFormControlTextarea1" rows="3" name=" description"></textarea>
                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" name="file" @error('file') is-invalid @enderror>
                                        </div>
                                        @error('file')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-secondary btn-block text-white">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!---form end----->

            </div>


        </section>

    </main><!-- End #main -->
@endsection

