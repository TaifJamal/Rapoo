@extends('admin.master')
@section('titel','Trach Neew')
@section('content')

    <h1>All Trach Neews</h1>
    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titel</th>
                <th>Date</th>
                <th>Content</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($neews as $neew)
                    <td>{{ $neew->id }}</td>
                    <td>{{ $neew->titel }}</td>
                    <td>{{ $neew->date }}</td>
                    <td>{!! $neew->content !!}</td>
                    <td><img src="{{ asset('image/neew/'.$neew->image) }}" width="80" alt=""></td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.neews.restore', $neew->id) }}"><i class="fas fa-undo"></i></a>
                        <form class="d-inline" action="{{ route('admin.neews.forcedelete', $neew->id) }}" method="POST">
                            @csrf
                            @method('delete')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-times"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
