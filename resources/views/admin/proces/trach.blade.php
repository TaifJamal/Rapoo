@extends('admin.master')
@section('titel',' Trach Proces')
@section('content')

    <h1>All Trach Proces</h1>
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
                @foreach ($proces as $proce)
                    <td>{{ $proce->id }}</td>
                    <td><img src="{{ asset('image/proces/'.$proce->image)}}" width="80"  alt=""></td>
                    <td>{{ $proce->titel }}</td>
                    <td>{!! $proce->content !!}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.proces.restore', $proce->id) }}"><i class="fas fa-undo"></i></a>
                        <form class="d-inline" action="{{ route('admin.proces.forcedelete', $proce->id) }}" method="POST">
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
