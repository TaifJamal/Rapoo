@extends('site.master')
@section('titel','Service |'.env('APP_NAME'))
@section('content')

@include('site.hero',['name'=>'service','text'=>'Creative It service'])

@include('site.part.service1')
@include('site.part.service2')
@include('site.part.proces')

@stop
