@extends('layouts.master')
@section('title', 'show post')
@section('content')

    <div class="container col-lg-6 col-md-offset-3 mt-5">

        <h2>{!! $post->title !!}</h2>

        <p class="lead">{!! $post->body !!}</p>

        <div class="well">
            <hr>
            <div class="row">

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <form action="{{ route('posts.destroy', ['id'=>$post->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a href="{{route('posts.edit', ['id' => $post->id])}}" class="btn  btn-warning" style="margin-bottom: 10px">Edit</a>

                        <button type="submit" class="btn btn-danger" style="margin-bottom: 10px">Delete</button>

                    </form>

                </div>

            </div>
        </div>
        @foreach ($comments as $comment)
            <p class="alert alert-secondary">{!! $comment->content !!}</p>
        @endforeach

        <div class="well well bs-component">
            <form class="form horizontal" method="post" action="/comment">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <input type="hidden" name="post_id" value="{!! $post->id !!}">
                <fieldset>

                    <div class="form-group mt-2  ">
                        <div class="col-lg-6 col-lg-offset-3 ">
                            <textarea class="form-control" rows="2" id="content" placeholder="Comment" name="content"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-6  mb-5">
                                <hr>
                                <button type="reset" class="btn btn-warning">Cancel</button>
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>

                        </div>

                    </div>
                </fieldset>

            </form>

        </div>
    </div>

@endsection

