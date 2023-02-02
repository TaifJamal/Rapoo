@extends('admin.master')
@section('titel','Neew')
@section('content')

    <h1>All Neews</h1>
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
                        <a class="btn btn-primary" href="{{ route('admin.neews.edit', $neew->id) }}"><i class="fas fa-edit"></i></a>
                        <form class="d-inline" action="{{ route('admin.neews.destroy', $neew->id) }}" method="POST">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
