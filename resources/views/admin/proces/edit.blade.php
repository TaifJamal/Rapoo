@extends('admin.master')
@section('titel','Edit Proces')
@section('content')
<h1>Edit Proces</h1>
    @include('errors')
    <form action="{{ route('admin.proces.update',$proces->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="mb-3">
            <label>Image</label>
            <img src="{{ asset('image/proces/'.$proces->image)}}" width="80"  alt="">
            <input type="file" name="image" class="form-control" >
        </div>


        <div class="mb-3">
            <label>Titel</label>
            <input type="text" name="titel" placeholder="Titel" class="form-control" value="{{ $proces->titel }}">
        </div>

        <div class="mb-3">
            <label>Content</label>
            <textarea class="myedit" placeholder="Content" name="content">{{ $proces->content }}</textarea>
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
