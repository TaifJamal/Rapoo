@extends('admin.master')
@section('titel','Project')
@section('content')

    <h1>All Projects</h1>
    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Client</th>
                <th>Category</th>
                <th>Website</th>
                <th>Image</th>
                <th>Service</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($projects as $project)
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->client }}</td>
                    <td>{{ $project->category }}</td>
                    <td>{{ $project->website }}</td>
                    <td><img src="{{ asset('image/project/'.$project->image)}}" width="80"  alt=""></td>
                    <td>{{ $project->About->titel }}</td>

                    <td>
                        @can('project-edit')
                        <a class="btn btn-primary" href="{{ route('admin.projects.edit', $project->id) }}"><i class="fas fa-edit"></i></a>
                        @endcan
                       @can('project-delete')
                       <form class="d-inline" action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
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
