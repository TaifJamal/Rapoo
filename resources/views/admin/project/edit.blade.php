@extends('admin.master')
@section('titel','Edit Project')
@section('content')
<h1>Edit Project</h1>
    @include('errors')
    <form action="{{ route('admin.projects.update',$project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $project->name }}">
        </div>

        <div class="mb-3">
            <label>Client</label>
            <input type="text" name="client" placeholder="Client" class="form-control" value="{{ $project->client }}">
        </div>

        <div class="mb-3">
            <label>Category</label>
            <input type="text" name="category" placeholder="Category" class="form-control" value="{{ $project->category }}">
        </div>

        <div class="mb-3">
            <label>Website</label>
            <input type="text" name="website" placeholder="Website" class="form-control" value="{{ $project->website }}">
        </div>

        <div class="mb-3">
            <label>Image</label>
            <img src="{{ asset('image/project/'.$project->image)}}" width="80"  alt="">
            <input type="file" name="image" class="form-control" >
        </div>

        <div class="mb-3">
            <label>Service</label>
            <select name="about_id" class="form-control">
                @foreach ($services as $service)
                 <option value="{{ $service->id }}" {{ $service->id==$project->about_id ? 'selected':'' }}>{{ $service->titel }}</option>
                @endforeach
            </select>
        </div>


        <button class="btn btn-success px-5">Update</button>
    </form>
@stop

