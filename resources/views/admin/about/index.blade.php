@extends('admin.master')
@section('titel','About')
@section('content')

    <h1>All Abouts</h1>
    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Icoun</th>
                <th>Titel</th>
                <th>Content</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($abouts as $about)
                    <td>{{ $about->id }}</td>
                    <td>{{ $about->icoun }}</td>
                    <td>{{ $about->titel }}</td>
                    <td>{!! $about->content !!}</td>
                    <td>{{ $about->type }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.abouts.edit', $about->id) }}"><i class="fas fa-edit"></i></a>
                        <form class="d-inline" action="{{ route('admin.abouts.destroy', $about->id) }}" method="POST">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $abouts->appends($_GET)->links() }}

@stop
