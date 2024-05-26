@extends('layouts.admin')
@section('title', 'show single user')
@section('content')

    <div class="container col-lg-6 col-md-offset-3 mt-5">

        <td>{{$user->user->name}}</td>
        <td>{{$user->phone}}</td>

        <div class="well">
            <hr>
            <div class="row">

                <div class="col-sm-6">
                    <a href="{{route('admin.users.edit', ['id' => $user->id])}}" class="btn  btn-warning">Edit</a>
                </div>

            </div>
        </div>

    </div>

@endsection


