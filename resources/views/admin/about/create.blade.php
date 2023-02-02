@extends('admin.master')
@section('titel','Add About')
@section('content')
<h1>Add new About</h1>
    @include('errors')
    <form action="{{ route('admin.abouts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Icoun</label>
            <input type="text" name="icoun" placeholder="Icoun" class="form-control" value="{{ old('icoun') }}">
        </div>

        <div class="mb-3">
            <label>Titel</label>
            <input type="text" name="titel" placeholder="Titel" class="form-control" value="{{ old('titel') }}">
        </div>

        <div class="mb-3">
            <label>Content</label>
            <textarea class="myedit" placeholder="Content" name="content">{{ old('content') }}</textarea>
        </div>


        <div class="mb-3">
            <label>Type</label>
            <select name="type" class="form-control">
                <option value=""></option>
                <option value="about">About</option>
                <option value="service1">Service1</option>
                <option value="service2">Service2</option>
            </select>
        </div>
        <button class="btn btn-success px-5">Add</button>
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
