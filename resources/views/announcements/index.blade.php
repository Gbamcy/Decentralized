@extends('layouts.master')
@section('title','index')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Upload Examples</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('announcements.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>image</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @if($announcements->isEmpty())
            <div>There are no announcements</div>
        @else
            @foreach ($announcements as $announcement)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><img src="/image/{{ $announcement->image }}" width="100px"></td>
                    <td>{{ $announcement->title }}</td>
                    <td>{{ $announcement->description }}</td>
                    <td>
                        <form action="{{ route('$announcements.destroy',$announcement->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('$announcements.show',$announcement->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('$announcements.edit',$announcement->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        @endif
    </table>

    {!! $annoucements->links() !!}
@endsection
