@extends('admin.master')
@section('titel','Proces')
@section('content')

    <h1>All Proces</h1>
    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Titel</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($process as $proces)
                    <td>{{ $proces->id }}</td>
                    <td><img src="{{ asset('image/proces/'.$proces->image)}}" width="80"  alt=""></td>
                    <td>{{ $proces->titel }}</td>
                    <td>{!! $proces->content !!}</td>
                    <td>
                        @can('proces-edit')
                        <a class="btn btn-primary" href="{{ route('admin.proces.edit', $proces->id) }}"><i class="fas fa-edit"></i></a>
                        @endcan
                        @can('proces-delete')
                        <form class="d-inline" action="{{ route('admin.proces.destroy', $proces->id) }}" method="POST">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                        </form>
                        @endcan


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
