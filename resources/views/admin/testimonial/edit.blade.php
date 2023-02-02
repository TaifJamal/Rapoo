@extends('admin.master')
@section('titel','Edit Testimonial')
@section('content')
<h1>Edit Testimonial</h1>
    @include('errors')
    <form action="{{ route('admin.testimonials.update',$testimonial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $testimonial->name }}">
        </div>

        <div class="mb-3">
            <label>Job</label>
            <input type="text" name="job" placeholder="Job" class="form-control" value="{{ $testimonial->job }}">
        </div>

        <div class="mb-3">
            <label>Comment</label>
            <textarea class="myedit" placeholder="Comment" name="comment">{{ $testimonial->comment}}</textarea>
        </div>

        <div class="mb-3">
            <label>Image</label>
            <img src="{{ asset('image/testimonial/'.$testimonial->image)}}" width="80"  alt="">
            <input type="file" name="image" class="form-control" >
        </div>

        <button class="btn btn-success px-5">Update</button>
    </form>
@stop
@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.2.0/tinymce.min.js" integrity="sha512-tofxIFo8lTkPN/ggZgV89daDZkgh1DunsMYBq41usfs3HbxMRVHWFAjSi/MXrT+Vw5XElng9vAfMmOWdLg0YbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
tinymce.init({
    selector: '.myedit'
})
</script>
@stop
